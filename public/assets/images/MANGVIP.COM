mixed-port: 7890
allow-lan: false
mode: rule
log-level: info
global-client-fingerprint: firefox
ipv6: true
proxy-groups:
    - { name: MANGVIP.COM, type: select, proxies: [AikoPanel, '[1]› 🇻🇳35 FBN - MANGVIP', '[2]› 🇻🇳43 SUN - MANGVIP', '[3]› 🇻🇳92 PCL - MANGVIP', '[4]› 🇻🇳61 NTA - MANGVIP', '[5]› 🇻🇳93 HPK - MANGVIP', '[6]› 🇻🇳81 MOX - MANGVIP.', '[7]› 🇻🇳55 MIA - MANGVIP', '[8]› 🇻🇳94 JES - MANGVIP', '[9]› 🇻🇳67 CMA - MANGVIP', '[10]› 🇻🇳69 BGA - MANGVIP', '[11]› 🇻🇳96 VJA - MANGVIP', '[12]› 🇻🇳31 BBO - MANGVIP', '[13]› 🇻🇳89 KCM - MANGVIP.', '[14]› 🇻🇳57 ACM - MANGVIP', '[15]› 🇻🇳49 PPA - MANGVIP', '[16]› 🇻🇳103 MAC - MANGVIP', '[17]› 🇻🇳87 STA - MANGVIP.', '[18]› 🇻🇳71 DBN - MANGVIP', '[19]› 🇻🇳13 GBO - MANGVIP', '[20]› 🇻🇳102 PIK - MANGVIP', '[21]› 🇻🇳19 SAF - MANGVIP', '[22]› 🇻🇳65 TNG - MANGVIP', '[23]› 🇻🇳51 LLK - MANGVIP', '[24]› 🇻🇳45 VIF - MANGVIP', '[25]› 🇻🇳39 BFM - MANGVIP', '[26]› 🇻🇳23 CNN-MANGVIP', '[27]› 🇻🇳91 ICO - MANGVIP.', '[28]› 🇻🇳83 DNO - MANGVIP.', '[29]› 🇻🇳53 VBF - MANGVIP', '[30]› 🇻🇳29 LFM - MANGVIP', '[31]› 🇻🇳85 HBI - MANGVIP.', '[32]› 🇻🇳105 BIG - MANGVIP', '[33]› 🇻🇳95 MXE - MANGVIP', '[34]› 🇻🇳47 DEV - MANGVIP', '[35]› 🇻🇳41 VOM - MANGVIP', '[36]› 🇻🇳73 HNI - MANGVIP.', '[37]› 🇻🇳27 MOK - MANGVIP', '[38]› 🇻🇳27 TIK-MANGVIP', '[39]› 🇻🇳59 HMI - MANGVIP', '[40]› 🇻🇳25 TCI-MANGVIP', '[41]› 🇻🇳21 HPP-MANGVIP', '[42]› 🇻🇳104 CBC - MANGVIP', '[43]› 🇻🇳101 GGC - MANGVIP', '[44]› 🇻🇳100 CFO - MANGVIP', '[45]› 🇻🇳99 KAI - MANGVIP', '[46]› 🇻🇳98 VIN - MANGVIP', '[47]› 🇻🇳75 BMI - MANGVIP.', '[48]› 🇻🇳25 HBO-MANGVIP', '[49]› 🇻🇳37 LGC - MANGVIP', '[50]› 🇻🇳33 ZIK - MANGVIP', '[51]› 🇻🇳77 RRY - MANGVIP.', '[52]› 🇻🇳106 SOM - MANGVIP', '[53]› 🇻🇳79 MCP - MANGVIP.', '[54]› 🇻🇳115 HNX - MANGVIP', '[55]› 🇻🇳113 HNK - MANGVIP', '[56]› 🇻🇳114 HNA - MANGVIP', '[57]› 🇻🇳116 HNP - MANGVIP', '[58]› 🇻🇳112 HNO - MANGVIP', '[59]› 🇻🇳63 MIX - MANGVIP', '[60]› 🇻🇳97 LOF - MANGVIP'] }
    - { name: AikoPanel, type: fallback, proxies: ['[1]› 🇻🇳35 FBN - MANGVIP', '[2]› 🇻🇳43 SUN - MANGVIP', '[3]› 🇻🇳92 PCL - MANGVIP', '[4]› 🇻🇳61 NTA - MANGVIP', '[5]› 🇻🇳93 HPK - MANGVIP', '[6]› 🇻🇳81 MOX - MANGVIP.', '[7]› 🇻🇳55 MIA - MANGVIP', '[8]› 🇻🇳94 JES - MANGVIP', '[9]› 🇻🇳67 CMA - MANGVIP', '[10]› 🇻🇳69 BGA - MANGVIP', '[11]› 🇻🇳96 VJA - MANGVIP', '[12]› 🇻🇳31 BBO - MANGVIP', '[13]› 🇻🇳89 KCM - MANGVIP.', '[14]› 🇻🇳57 ACM - MANGVIP', '[15]› 🇻🇳49 PPA - MANGVIP', '[16]› 🇻🇳103 MAC - MANGVIP', '[17]› 🇻🇳87 STA - MANGVIP.', '[18]› 🇻🇳71 DBN - MANGVIP', '[19]› 🇻🇳13 GBO - MANGVIP', '[20]› 🇻🇳102 PIK - MANGVIP', '[21]› 🇻🇳19 SAF - MANGVIP', '[22]› 🇻🇳65 TNG - MANGVIP', '[23]› 🇻🇳51 LLK - MANGVIP', '[24]› 🇻🇳45 VIF - MANGVIP', '[25]› 🇻🇳39 BFM - MANGVIP', '[26]› 🇻🇳23 CNN-MANGVIP', '[27]› 🇻🇳91 ICO - MANGVIP.', '[28]› 🇻🇳83 DNO - MANGVIP.', '[29]› 🇻🇳53 VBF - MANGVIP', '[30]› 🇻🇳29 LFM - MANGVIP', '[31]› 🇻🇳85 HBI - MANGVIP.', '[32]› 🇻🇳105 BIG - MANGVIP', '[33]› 🇻🇳95 MXE - MANGVIP', '[34]› 🇻🇳47 DEV - MANGVIP', '[35]› 🇻🇳41 VOM - MANGVIP', '[36]› 🇻🇳73 HNI - MANGVIP.', '[37]› 🇻🇳27 MOK - MANGVIP', '[38]› 🇻🇳27 TIK-MANGVIP', '[39]› 🇻🇳59 HMI - MANGVIP', '[40]› 🇻🇳25 TCI-MANGVIP', '[41]› 🇻🇳21 HPP-MANGVIP', '[42]› 🇻🇳104 CBC - MANGVIP', '[43]› 🇻🇳101 GGC - MANGVIP', '[44]› 🇻🇳100 CFO - MANGVIP', '[45]› 🇻🇳99 KAI - MANGVIP', '[46]› 🇻🇳98 VIN - MANGVIP', '[47]› 🇻🇳75 BMI - MANGVIP.', '[48]› 🇻🇳25 HBO-MANGVIP', '[49]› 🇻🇳37 LGC - MANGVIP', '[50]› 🇻🇳33 ZIK - MANGVIP', '[51]› 🇻🇳77 RRY - MANGVIP.', '[52]› 🇻🇳106 SOM - MANGVIP', '[53]› 🇻🇳79 MCP - MANGVIP.', '[54]› 🇻🇳115 HNX - MANGVIP', '[55]› 🇻🇳113 HNK - MANGVIP', '[56]› 🇻🇳114 HNA - MANGVIP', '[57]› 🇻🇳116 HNP - MANGVIP', '[58]› 🇻🇳112 HNO - MANGVIP', '[59]› 🇻🇳63 MIX - MANGVIP', '[60]› 🇻🇳97 LOF - MANGVIP'], url: 'http://cp.cloudflare.com/', interval: 7200 }
sniffer:
    enable: true
    override-destination: true
    sniffing: [tls, http]
dns:
    enable: true
    listen: '0.0.0.0:8853'
    enhanced-mode: fake-ip
    fake-ip-range: 198.18.0.1/16
    use-hosts: true
    nameserver: ['tls://1.1.1.1', 'tls://1.0.0.1', 'https://1.1.1.1/dns-query', 'https://1.0.0.1/dns-query']
    ipv6: true
rules:
    - 'DOMAIN,mangvip.com,DIRECT'
    - 'DOMAIN-SUFFIX,local,DIRECT'
    - 'IP-CIDR,127.0.0.0/8,DIRECT'
    - 'IP-CIDR,172.16.0.0/12,DIRECT'
    - 'IP-CIDR,192.168.0.0/16,DIRECT'
    - 'IP-CIDR,10.0.0.0/8,DIRECT'
    - 'IP-CIDR,17.0.0.0/8,DIRECT'
    - 'IP-CIDR,100.64.0.0/10,DIRECT'
    - 'IP-CIDR,224.0.0.0/4,DIRECT'
    - 'IP-CIDR6,fe80::/10,DIRECT'
    - 'MATCH,MANGVIP.COM'
proxies:
    - { name: '[1]› 🇻🇳35 FBN - MANGVIP', type: vmess, server: mv35.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[2]› 🇻🇳43 SUN - MANGVIP', type: vmess, server: mv43.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[3]› 🇻🇳92 PCL - MANGVIP', type: vmess, server: mv92.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[4]› 🇻🇳61 NTA - MANGVIP', type: vmess, server: mv61.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[5]› 🇻🇳93 HPK - MANGVIP', type: vmess, server: mv93.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[6]› 🇻🇳81 MOX - MANGVIP.', type: vmess, server: mv81.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[7]› 🇻🇳55 MIA - MANGVIP', type: vmess, server: mv55.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[8]› 🇻🇳94 JES - MANGVIP', type: vmess, server: mv94.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[9]› 🇻🇳67 CMA - MANGVIP', type: vmess, server: mv67.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[10]› 🇻🇳69 BGA - MANGVIP', type: vmess, server: mv69.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[11]› 🇻🇳96 VJA - MANGVIP', type: vmess, server: mv96.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[12]› 🇻🇳31 BBO - MANGVIP', type: vmess, server: mv31.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[13]› 🇻🇳89 KCM - MANGVIP.', type: vmess, server: mv89.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[14]› 🇻🇳57 ACM - MANGVIP', type: vmess, server: mv57.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[15]› 🇻🇳49 PPA - MANGVIP', type: vmess, server: mv49.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[16]› 🇻🇳103 MAC - MANGVIP', type: vmess, server: mv103.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[17]› 🇻🇳87 STA - MANGVIP.', type: vmess, server: mv87.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[18]› 🇻🇳71 DBN - MANGVIP', type: vmess, server: mv71.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[19]› 🇻🇳13 GBO - MANGVIP', type: vmess, server: mv13.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[20]› 🇻🇳102 PIK - MANGVIP', type: vmess, server: mv102.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[21]› 🇻🇳19 SAF - MANGVIP', type: vmess, server: mv19.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[22]› 🇻🇳65 TNG - MANGVIP', type: vmess, server: mv65.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[23]› 🇻🇳51 LLK - MANGVIP', type: vmess, server: mv51.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[24]› 🇻🇳45 VIF - MANGVIP', type: vmess, server: mv45.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[25]› 🇻🇳39 BFM - MANGVIP', type: vmess, server: mv39.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[26]› 🇻🇳23 CNN-MANGVIP', type: vmess, server: mv23.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[27]› 🇻🇳91 ICO - MANGVIP.', type: vmess, server: mv91.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[28]› 🇻🇳83 DNO - MANGVIP.', type: vmess, server: mv83.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[29]› 🇻🇳53 VBF - MANGVIP', type: vmess, server: mv53.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[30]› 🇻🇳29 LFM - MANGVIP', type: vmess, server: mv29.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[31]› 🇻🇳85 HBI - MANGVIP.', type: vmess, server: mv85.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[32]› 🇻🇳105 BIG - MANGVIP', type: vmess, server: mv105.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[33]› 🇻🇳95 MXE - MANGVIP', type: vmess, server: mv95.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[34]› 🇻🇳47 DEV - MANGVIP', type: vmess, server: mv47.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[35]› 🇻🇳41 VOM - MANGVIP', type: vmess, server: mv41.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[36]› 🇻🇳73 HNI - MANGVIP.', type: vmess, server: mv73.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[37]› 🇻🇳27 MOK - MANGVIP', type: vmess, server: mv27.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[38]› 🇻🇳27 TIK-MANGVIP', type: vmess, server: mv17.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[39]› 🇻🇳59 HMI - MANGVIP', type: vmess, server: mv59.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[40]› 🇻🇳25 TCI-MANGVIP', type: vmess, server: mv15.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[41]› 🇻🇳21 HPP-MANGVIP', type: vmess, server: mv21.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[42]› 🇻🇳104 CBC - MANGVIP', type: vmess, server: mv104.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[43]› 🇻🇳101 GGC - MANGVIP', type: vmess, server: mv101.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[44]› 🇻🇳100 CFO - MANGVIP', type: vmess, server: mv100.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[45]› 🇻🇳99 KAI - MANGVIP', type: vmess, server: mv99.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[46]› 🇻🇳98 VIN - MANGVIP', type: vmess, server: mv98.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[47]› 🇻🇳75 BMI - MANGVIP.', type: vmess, server: mv75.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[48]› 🇻🇳25 HBO-MANGVIP', type: vmess, server: mv25.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[49]› 🇻🇳37 LGC - MANGVIP', type: vmess, server: mv37.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[50]› 🇻🇳33 ZIK - MANGVIP', type: vmess, server: mv33.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[51]› 🇻🇳77 RRY - MANGVIP.', type: vmess, server: mv77.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[52]› 🇻🇳106 SOM - MANGVIP', type: vmess, server: mv106.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[53]› 🇻🇳79 MCP - MANGVIP.', type: vmess, server: mv79.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[54]› 🇻🇳115 HNX - MANGVIP', type: vmess, server: mv115.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[55]› 🇻🇳113 HNK - MANGVIP', type: vmess, server: mv113.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[56]› 🇻🇳114 HNA - MANGVIP', type: vmess, server: mv114.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[57]› 🇻🇳116 HNP - MANGVIP', type: vmess, server: mv116.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[58]› 🇻🇳112 HNO - MANGVIP', type: vmess, server: mv112.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[59]› 🇻🇳63 MIX - MANGVIP', type: vmess, server: mv63.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
    - { name: '[60]› 🇻🇳97 LOF - MANGVIP', type: vmess, server: mv97.mangvip.com, port: 80, uuid: 60290bb0-4543-414e-9c8a-83276685c04d, alterId: 0, cipher: auto, udp: true, network: ws, ws-opts: { headers: { Host: v9.tiktokcdn.com } } }
