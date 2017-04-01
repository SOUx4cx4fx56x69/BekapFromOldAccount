#include<curl/curl.h>
void SendHTTPPOST(char*url,char*cookie,char*postField,int socket,char*channel)
{
  char tmp[256];
  FILE *devnull = fopen("/dev/null", "w+");
  CURL *curl;
  curl_global_init(CURL_GLOBAL_ALL);
  curl = curl_easy_init();
  if(curl) {
  curl_easy_setopt(curl, CURLOPT_URL, url);
  curl_easy_setopt(curl, CURLOPT_POSTFIELDS, postField);
  curl_easy_setopt(curl, CURLOPT_COOKIE, cookie);
  curl_easy_setopt(curl, CURLOPT_WRITEDATA, devnull);
  if(curl_easy_perform(curl) != CURLE_OK)
  {
   sprintf(tmp,"PRIVMSG %s error",channel);
   writeTo(socket, tmp);
  }
  else
  {
   sprintf(tmp,"PRIVMSG %s succefully",channel);
   writeTo(socket, tmp);
  }
  curl_easy_cleanup(curl);
  }
  curl_global_cleanup();
}

