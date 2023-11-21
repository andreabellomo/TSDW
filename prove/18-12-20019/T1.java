import java.util.*;
public class T1 extends Thread{
    private static String name;
    Shared shared;
    private int m;
    

    public T1(String name , Shared shared){
        this.name = name;
        this.shared = shared;
    }

    public void run(){
        while(true){
            try{
                sleep(100);
            }catch(InterruptedException e) {e.printStackTrace();}
            
            Random rand = new Random();
            m = rand.nextInt(11);

            int x = shared.get();

            if (x == -1) return;
            if(m == x) {
                System.out.println("RISPOSTA CORRETTA");
                shared.set(-1);
                return;
            }
            if(Math.abs(m-x) > 5){
                System.out.println("RISPOSTA MOLTO SBAGLIATA");
               try{
                    shared.waitShared();
                    continue;
               }catch(InterruptedException e) {e.printStackTrace();}
                
            }else {
                System.out.println("RISPOSTA SBAGLIATA");

            }
        } 

        
    }
}