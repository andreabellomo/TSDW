import java.io.*;
import java.net.*;


public class EchoClient{
    public static void main(String [] args) throws IOException{

        InetAddress addr;

        if(args.length == 0 ) addr = InetAddress.getByName(null);
        else addr = InetAddress.getByName(args[0]);
        
        Socket socket = null;
        BufferedReader in = null;
        BufferedReader stdIn = null;
        PrintWriter out = null;

        try {
            
            socket = new Socket(addr, EchoServer.port);
            System.out.println("client started, socket : " + socket);

            in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
            out = new PrintWriter(socket.getOutputStream(),true);
            stdIn = new BufferedReader(new InputStreamReader(System.in));
            String msg;
            

            while (true){
                
                msg = stdIn.readLine();
                out.println(msg);

                if(msg.equals(EchoServer.secret)){
                    System.out.println("killing server with secret : " + msg);
                    break;
                }

                System.out.println("Server Response: " + in.readLine());


            }
        } catch (UnknownHostException e) {
            System.err.println("Don't know about host " + addr);
            System.exit(1);
            // TODO: handle exception
        } catch (IOException e){
            System.err.println("Couldn't get I/O for the connection to:" + addr);
            System.exit(1);
        }

        System.out.println("EchoClient: closing...");
        out.close();
        in.close();
        stdIn.close();
        socket.close();



}
}