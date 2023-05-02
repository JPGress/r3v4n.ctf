#!/bin/bash

#02Scan

#OpenVas
gvm-start ;

#whatweb
whatweb 10.0.0.12 -v;

#ffuf
ffuf -c -u http://10.0.0.12/FUZZ -w /usr/share/dirb/wordlists/big.txt;

#gobuster
gobuster dir -e -u http://10.0.0.12 -w /usr/share/wordlists/dirb/big.txt -x .php;

#wfuzz
wfuzz -c -z file,/usr/share/wfuzz/wordlist/general/common.txt --hc 404 http://10.0.0.12/FUZZ;

#nikto
nikto -host http://10.0.0.12/;

#nmap
cd /usr/share/nmap/scripts && nmap -sC -sV -v -Pn --script=vuln 10.0.0.12;

#sqlmap
sqlmap -u IP

#recon
./recon.py -v 10.0.0.12;

#dirb
dirb http://10.0.0.12 /usr/share/dirb/wordlists/big.txt;
