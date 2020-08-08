#include<iostream.h>
using namespace std;
class Calculator{
public:
int Add(int x,int y){
return x + y;
}
int Sub(int x,int y){
return x - y;
}
int MUL(int x,int y){
return x * y;
}
int Div(int x,int y){
return x / y;
}
int Rem(int x,int y){
return x % y;
}
};

int main(){
Calculator t1,t2;
cout << "Addition = " << t1.Add(3,4) << endl;
cout << "Substraction = " << t1.Sub(3,4) << endl;
cout << "Multiplication = " << t1.MUL(3,4) << endl;
cout << "Division = " << t1.Div(3,4) << endl;
cout << " Modulous = " << t1.Rem(3,4);
return 0;
}