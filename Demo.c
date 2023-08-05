#include<stdio.h>
#include<conio.h>
void main()
{
int a[50],n,i,flag,se,
clrscr;
printf("enter the size of the array");
scanf("%d",&n);
printf("enter the array elements");
for(i=0;i<n;i++)
{
scanf("%d",&a[i]);
}
printf("enter the se");
scanf("%d",&se);
for(i=0;i<n,i++);
{
if(a[i]==se)
{
printf("se is found ",i);
flag=1;
break;
}
}
if(a[i]!=se);
printf("se is not found");
}
}