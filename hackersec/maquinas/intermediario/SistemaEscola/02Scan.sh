#!/bin/bash

#02Scan

#OpenVas
gvm-start ;

#whatweb
whatweb 10.0.0.16 -v;

#recon
python3 recon.py -v 10.0.0.16;

#nmap
cd /usr/share/nmap/scripts && nmap -sC -sV -v -Pn --script=vuln 10.0.0.16;

#ffuf
ffuf -c -u http://10.0.0.16/FUZZ -w /usr/share/dirb/wordlists/big.txt;

#gobuster
gobuster dir -e -u http://10.0.0.16 -w /usr/share/wordlists/dirb/big.txt -x .php;

#wfuzz
wfuzz -c -z file,/usr/share/wfuzz/wordlist/general/common.txt --hc 404 http://10.0.0.16/FUZZ;

#nikto
nikto -host http://10.0.0.16/;

#sqlmap
#sqlmap

#dirb
dirb http://10.0.0.16 /usr/share/dirb/wordlists/big.txt;
