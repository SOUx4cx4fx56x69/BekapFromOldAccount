void XOR(unsigned long long salt,char * array){ 
while(*array){  
*array ^= salt; 
*array++; 
} 
}
