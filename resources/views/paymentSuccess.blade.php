<!DOCTYPE html>
<html class="flex w-full h-full "><head>
                            <meta charset="utf-8">
                            <script src="https://cdn.tailwindcss.com"></script>

                            <script>
                                tailwind.config = {
                                    darkMode: 'class',
                                }

                                function fixLinks() {
                                    var links = document.querySelectorAll("a");

                                    for (var index = 0; index < links.length; index++) {
                                        links[index].setAttribute('target', '_blank');
                                        
                                        if (links[index].getAttribute('href') == '#') {
                                            links[index].removeAttribute('href');
                                        }
                                    }
                                }
                            </script>

                            <style>
                                a {
                                    cursor: pointer;
                                }
                            </style>
                        <style>/* ! tailwindcss v3.4.5 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }.mx-auto{margin-left:auto;margin-right:auto}.my-auto{margin-top:auto;margin-bottom:auto}.my-2{margin-top:0.5rem;margin-bottom:0.5rem}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.flex{display:flex}.h-full{height:100%}.h-16{height:4rem}.h-screen{height:100vh}.w-full{width:100%}.w-16{width:4rem}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-indigo-600{--tw-bg-opacity:1;background-color:rgb(79 70 229 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.p-6{padding:1.5rem}.px-12{padding-left:3rem;padding-right:3rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.text-center{text-align:center}.text-base{font-size:1rem;line-height:1.5rem}.font-semibold{font-weight:600}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:bg-indigo-500:hover{--tw-bg-opacity:1;background-color:rgb(99 102 241 / var(--tw-bg-opacity))}@media (min-width: 768px){.md\:mx-auto{margin-left:auto;margin-right:auto}.md\:text-2xl{font-size:1.5rem;line-height:2rem}}</style></head>
                        <body onload="fixLinks();" style="height: min-content;" class="my-auto mx-auto">
                        <div class="bg-white h-screen flex items-center justify-center">
                            <div class="bg-white p-6 md:mx-auto max-w-md w-full">
                                <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                                    <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                                </svg>
                                <div class="text-center">
                                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold">Thanh toán thành công !</h3>
                                    <p class="text-gray-600 my-2">Cảm ơn bạn đã hoàn tất thanh toán trực tuyến an toàn.

</p>
                                    <p>Chúc bạn một ngày tuyệt vời!</p>
                                    <div class="py-10">
                                        <a href="{{route('home')}}" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 inline-block">
                                            TRỞ VỀ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <script>window.top.postMessage(JSON.parse(JSON.stringify({
                    ours: 1,
                    childHeight:
                        document.querySelectorAll('body > *:not(script):not(link)').length > 1 ?
                        document.documentElement.getBoundingClientRect().height :
                            document.querySelector('body > *:not(script):not(link)').getBoundingClientRect().height +
                            parseInt(window.getComputedStyle(document.querySelector('body > *:not(script):not(link)')).getPropertyValue('margin-top')) +
                            parseInt(window.getComputedStyle(document.querySelector('body > *:not(script):not(link)')).getPropertyValue('margin-bottom')),

                })), '*');</script><script>document.body.addEventListener("resize", () => {window.top.postMessage(JSON.parse(JSON.stringify({
                    ours: 1,
                    childHeight:
                        document.querySelectorAll('body > *:not(script):not(link)').length > 1 ?
                        document.documentElement.getBoundingClientRect().height :
                            document.querySelector('body > *:not(script):not(link)').getBoundingClientRect().height +
                            parseInt(window.getComputedStyle(document.querySelector('body > *:not(script):not(link)')).getPropertyValue('margin-top')) +
                            parseInt(window.getComputedStyle(document.querySelector('body > *:not(script):not(link)')).getPropertyValue('margin-bottom')),

                })), '*');});</script>
                        
                    </body></html>