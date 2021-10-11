#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int use_money(int money,int use){

    return money - use;

}

const char * say_hello( const char *name){
  return strcat("hello,",name);
}