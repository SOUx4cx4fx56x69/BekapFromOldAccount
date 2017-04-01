#include<curl/curl.h>
#include<stdio.h>
#include<stdlib.h>
#include "bomjvkapi.h"
void 
SendMethod(char*url)
{
  CURL * curl;
  curl_global_init(CURL_GLOBAL_ALL);
  curl = curl_easy_init();
  if(curl) 
  {
  curl_easy_setopt(curl, CURLOPT_URL, url);
  curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, toTrash);
  curl_easy_setopt(curl, CURLOPT_HTTPGET, 1);
  curl_easy_perform(curl);//do
  curl_easy_cleanup(curl);//clean
  }
  curl_global_cleanup();
}

void
_method(char*method,char*fields)
{
char tmp[SIZEMETHODBUF];
removeNewLine(method);
removeNewLine(fields);
sprintf(tmp,"https://api.vk.com/method/%s?%s&access_token=%s",method,fields,__TOKEN__);
SendMethod(tmp);
}
