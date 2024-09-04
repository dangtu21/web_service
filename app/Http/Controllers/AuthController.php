<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Order_Detail;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','refresh']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);
      
        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $data = [
            'sub' => auth('api')->user()->id,
            'random'=>rand().time(),
            'exp' => time() + config('jwt.refresh_ttl')
        ];
        
        $refreshToken=JWTAuth::getJWTProvider()->encode($data);

        return $this->respondWithToken($token,$refreshToken);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {   
        try{
            return response()->json(auth('api')->user());
        }catch(JWTException $ex){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {   
        $refreshToken = request()->refresh_token;
        try {
            $decoded = JWTAuth::getJWTProvider()->decode($refreshToken);
            $user = User::find($decoded['sub']);
            if(!$user){
                return response()->json(['error' => 'user not foud'], 500);
            }
            auth('api')->invalidate();
            $token = auth('api')->login($user);
            $refreshToken = $this->createRefreshToken();
            return $this->respondWithToken($token,$refreshToken );
        }catch(JWTException $ex){
            return response()->json(['error' => 'refresh invalid'], 401);
        }
        
        // return $this->respondWithToken(auth('api')->refresh());
    }


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token,$refreshToken)
    {
        return response()->json([
            'access_token' => $token,
            'refresh_token' => $refreshToken,
            'token_type' => 'bearer',
            // 'expires_in' => auth('api')->factory()->getTTL() * 60
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
    private function createRefreshToken(){
        $data = [
            'sub' => auth('api')->user()->id,
            'random'=>rand().time(),
            'exp' => time() + config('jwt.refresh_ttl')
        ];
        
        $refreshToken=JWTAuth::getJWTProvider()->encode($data);

        return $refreshToken;
    }
    
    public function subscribe(Request $request)
    {
        // Lấy các query parameters từ request
        $token = $request->query('token');
        $flag = $request->query('flag');
        try{
            $decoded = JWTAuth::getJWTProvider()->decode($token);
            // Tìm kiếm bản ghi trong Order_Detail dựa trên product_id và user_id
            $orderDetail = Order_Detail::where('product_id', $decoded['product_id'])
            ->where('user_id', $decoded['sub'])
            ->first();
            if ($orderDetail) {
                $vmess_links = 'vmess://eyJ2IjoiMiIsInBzIjoiWzFdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzM3IExHQyAtIE1BTkdWSVAiLCJhZGQiOiJtdjM3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzJdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzY3IENNQSAtIE1BTkdWSVAiLCJhZGQiOiJtdjY3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzNdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg1IEhCSSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzRdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzk0IEpFUyAtIE1BTkdWSVAiLCJhZGQiOiJtdjk0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzVdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzU5IEhNSSAtIE1BTkdWSVAiLCJhZGQiOiJtdjU5Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzZdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg5IEtDTSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzddXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzIzIENOTi1NQU5HVklQIiwiYWRkIjoibXYyMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzhdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkyIFBDTCAtIE1BTkdWSVAiLCJhZGQiOiJtdjkyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzldXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkzIEhQSyAtIE1BTkdWSVAiLCJhZGQiOiJtdjkzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzEwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MyBWQkYgLSBNQU5HVklQIiwiYWRkIjoibXY1My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzExXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OCBWSU4gLSBNQU5HVklQIiwiYWRkIjoibXY5OC5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzEyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDMgTUFDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzEzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyOSBMRk0gLSBNQU5HVklQIiwiYWRkIjoibXYyOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MSBEQk4gLSBNQU5HVklQIiwiYWRkIjoibXY3MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MSBNT1ggLSBNQU5HVklQLiIsImFkZCI6Im12ODEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MyBETk8gLSBNQU5HVklQLiIsImFkZCI6Im12ODMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2OSBCR0EgLSBNQU5HVklQIiwiYWRkIjoibXY2OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzOSBCRk0gLSBNQU5HVklQIiwiYWRkIjoibXYzOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzE5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NSBNWEUgLSBNQU5HVklQIiwiYWRkIjoibXY5NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzIwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NyBERVYgLSBNQU5HVklQIiwiYWRkIjoibXY0Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzIxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBUSUstTUFOR1ZJUCIsImFkZCI6Im12MTcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzIyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMyBaSUsgLSBNQU5HVklQIiwiYWRkIjoibXYzMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzIzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzNSBGQk4gLSBNQU5HVklQIiwiYWRkIjoibXYzNS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NSBWSUYgLSBNQU5HVklQIiwiYWRkIjoibXY0NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NSBNSUEgLSBNQU5HVklQIiwiYWRkIjoibXY1NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2NSBUTkcgLSBNQU5HVklQIiwiYWRkIjoibXY2NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBUQ0ktTUFOR1ZJUCIsImFkZCI6Im12MTUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5MSBJQ08gLSBNQU5HVklQLiIsImFkZCI6Im12OTEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzI5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDEgR0dDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAxLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzMwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NSBCTUkgLSBNQU5HVklQLiIsImFkZCI6Im12NzUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzMxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDUgQklHIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzMyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MyBITkkgLSBNQU5HVklQLiIsImFkZCI6Im12NzMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzMzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0OSBQUEEgLSBNQU5HVklQIiwiYWRkIjoibXY0OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDQgQ0JDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDAgQ0ZPIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAwLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MSBOVEEgLSBNQU5HVklQIiwiYWRkIjoibXY2MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MSBMTEsgLSBNQU5HVklQIiwiYWRkIjoibXY1MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MyBTVU4gLSBNQU5HVklQIiwiYWRkIjoibXY0My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzM5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBIQk8tTUFOR1ZJUCIsImFkZCI6Im12MjUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDIgUElLIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4NyBTVEEgLSBNQU5HVklQLiIsImFkZCI6Im12ODcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyMSBIUFAtTUFOR1ZJUCIsImFkZCI6Im12MjEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NyBBQ00gLSBNQU5HVklQIiwiYWRkIjoibXY1Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBNT0sgLSBNQU5HVklQIiwiYWRkIjoibXYyNy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NiBWSkEgLSBNQU5HVklQIiwiYWRkIjoibXY5Ni5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMSBCQk8gLSBNQU5HVklQIiwiYWRkIjoibXYzMS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxOSBTQUYgLSBNQU5HVklQIiwiYWRkIjoibXYxOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMyBHQk8gLSBNQU5HVklQIiwiYWRkIjoibXYxMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzQ5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NyBSUlkgLSBNQU5HVklQLiIsImFkZCI6Im12NzcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzUwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OSBLQUkgLSBNQU5HVklQIiwiYWRkIjoibXY5OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzUxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDYgU09NIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzUyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MSBWT00gLSBNQU5HVklQIiwiYWRkIjoibXY0MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzUzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3OSBNQ1AgLSBNQU5HVklQLiIsImFkZCI6Im12NzkubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTMgSE5LIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTUgSE5YIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTQgSE5BIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTYgSE5QIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTIgSE5PIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                    vmess://eyJ2IjoiMiIsInBzIjoiWzU5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MyBNSVggLSBNQU5HVklQIiwiYWRkIjoibXY2My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    vmess://eyJ2IjoiMiIsInBzIjoiWzYwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NyBMT0YgLSBNQU5HVklQIiwiYWRkIjoibXY5Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                    ';

                $encodedData = base64_encode($vmess_links);
                return response($encodedData, 200)->header('Content-Type', 'text/plain');
            } else {
                $bool = false; // Nếu không tìm thấy, đặt $bool là false
            }


        }catch(JWTException $e){

        }
        
    }
    public function subscribeLink()
    {
        
        // Tạo URL cơ bản
        $link = "sub://";
        $domain = "13.229.248.47/api/auth/shadownroket?token=";
        
        // Tạo token cho sản phẩm
        $token = AuthController::createTokenProduct(1);
        
        // Nối token vào URL
        $domain = $domain . $token;
        
        // Mã hóa URL bằng base64
        $code = base64_encode($domain);
        
        // Nối phần mã hóa vào link
        $link = $link . $code;
       
        // Chuyển hướng người dùng đến liên kết
        return redirect()->away($link);
    }
    public static function createTokenProduct($product_id){
        $data = [
            'sub' => 1,
            'product_id'=>$product_id,
            'random'=>rand().time(),
            'exp' => time() + config('jwt.refresh_ttl')
        ];
        $token=JWTAuth::getJWTProvider()->encode($data);
        return $token;
    }

    public function getServer(){
        try{

            if(!auth('api')){
                 return response()->json(['error' => 'Unauthorized'], 405);
            }
            $vmess_links = 'vmess://eyJ2IjoiMiIsInBzIjoiWzFdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzM3IExHQyAtIE1BTkdWSVAiLCJhZGQiOiJtdjM3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzJdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzY3IENNQSAtIE1BTkdWSVAiLCJhZGQiOiJtdjY3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzNdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg1IEhCSSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzRdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzk0IEpFUyAtIE1BTkdWSVAiLCJhZGQiOiJtdjk0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzVdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzU5IEhNSSAtIE1BTkdWSVAiLCJhZGQiOiJtdjU5Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzZdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg5IEtDTSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzddXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzIzIENOTi1NQU5HVklQIiwiYWRkIjoibXYyMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzhdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkyIFBDTCAtIE1BTkdWSVAiLCJhZGQiOiJtdjkyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzldXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkzIEhQSyAtIE1BTkdWSVAiLCJhZGQiOiJtdjkzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzEwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MyBWQkYgLSBNQU5HVklQIiwiYWRkIjoibXY1My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzExXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OCBWSU4gLSBNQU5HVklQIiwiYWRkIjoibXY5OC5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzEyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDMgTUFDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzEzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyOSBMRk0gLSBNQU5HVklQIiwiYWRkIjoibXYyOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MSBEQk4gLSBNQU5HVklQIiwiYWRkIjoibXY3MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MSBNT1ggLSBNQU5HVklQLiIsImFkZCI6Im12ODEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzE2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MyBETk8gLSBNQU5HVklQLiIsImFkZCI6Im12ODMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzE3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2OSBCR0EgLSBNQU5HVklQIiwiYWRkIjoibXY2OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzOSBCRk0gLSBNQU5HVklQIiwiYWRkIjoibXYzOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NSBNWEUgLSBNQU5HVklQIiwiYWRkIjoibXY5NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NyBERVYgLSBNQU5HVklQIiwiYWRkIjoibXY0Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBUSUstTUFOR1ZJUCIsImFkZCI6Im12MTcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzIyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMyBaSUsgLSBNQU5HVklQIiwiYWRkIjoibXYzMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzNSBGQk4gLSBNQU5HVklQIiwiYWRkIjoibXYzNS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NSBWSUYgLSBNQU5HVklQIiwiYWRkIjoibXY0NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NSBNSUEgLSBNQU5HVklQIiwiYWRkIjoibXY1NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2NSBUTkcgLSBNQU5HVklQIiwiYWRkIjoibXY2NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBUQ0ktTUFOR1ZJUCIsImFkZCI6Im12MTUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzI4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5MSBJQ08gLSBNQU5HVklQLiIsImFkZCI6Im12OTEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzI5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDEgR0dDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAxLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzMwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NSBCTUkgLSBNQU5HVklQLiIsImFkZCI6Im12NzUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzMxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDUgQklHIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzMyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MyBITkkgLSBNQU5HVklQLiIsImFkZCI6Im12NzMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzMzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0OSBQUEEgLSBNQU5HVklQIiwiYWRkIjoibXY0OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDQgQ0JDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzM1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDAgQ0ZPIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAwLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzM2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MSBOVEEgLSBNQU5HVklQIiwiYWRkIjoibXY2MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MSBMTEsgLSBNQU5HVklQIiwiYWRkIjoibXY1MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MyBTVU4gLSBNQU5HVklQIiwiYWRkIjoibXY0My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBIQk8tTUFOR1ZJUCIsImFkZCI6Im12MjUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDIgUElLIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzQxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4NyBTVEEgLSBNQU5HVklQLiIsImFkZCI6Im12ODcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyMSBIUFAtTUFOR1ZJUCIsImFkZCI6Im12MjEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NyBBQ00gLSBNQU5HVklQIiwiYWRkIjoibXY1Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBNT0sgLSBNQU5HVklQIiwiYWRkIjoibXYyNy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NiBWSkEgLSBNQU5HVklQIiwiYWRkIjoibXY5Ni5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMSBCQk8gLSBNQU5HVklQIiwiYWRkIjoibXYzMS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxOSBTQUYgLSBNQU5HVklQIiwiYWRkIjoibXYxOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMyBHQk8gLSBNQU5HVklQIiwiYWRkIjoibXYxMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NyBSUlkgLSBNQU5HVklQLiIsImFkZCI6Im12NzcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzUwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OSBLQUkgLSBNQU5HVklQIiwiYWRkIjoibXY5OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzUxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDYgU09NIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzUyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MSBWT00gLSBNQU5HVklQIiwiYWRkIjoibXY0MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzUzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3OSBNQ1AgLSBNQU5HVklQLiIsImFkZCI6Im12NzkubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzU0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTMgSE5LIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTUgSE5YIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTQgSE5BIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTYgSE5QIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTIgSE5PIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MyBNSVggLSBNQU5HVklQIiwiYWRkIjoibXY2My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzYwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NyBMT0YgLSBNQU5HVklQIiwiYWRkIjoibXY5Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                ';

        $encodedData = base64_encode($vmess_links);
        return response($encodedData, 200)
        ->header('Content-Type', 'text/plain');
        
        }catch(JWTException $ex){
            return response()->json(['error' => 'Unauthorized'], 409);
        }
    }
}