import java.net.*;
class Url_demo;
{
public static void main(){
URL u1 = new URL(http://EEC :80/index.html);
System.out.println(u1.getProtocol());
System.out.println(u1.getHost());
System.out.println(u1.getPort());
System.out.println(u1.getFile());
}
}