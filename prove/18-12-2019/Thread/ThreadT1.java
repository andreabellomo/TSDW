import java.util.Random;

public class ThreadT1 extends Thread{

    Shared shared ;

    public ThreadT1(Shared shared){
        this.shared = shared;
        
    }

    public void run(){

        while(true){

        try{
            sleep(100);
        } catch(InterruptedException e){}

        Random rand = new Random();
        int m = rand.nextInt(11);
        

        synchronized (shared){
            int x = shared.getShared();
            if(x == -1) break;
            if(m == x ){
                System.out.println("RISPOSTA CORRETTA");
                shared.setShared(-1);
                return;
            }else if (Math.abs(m-x) > 5){
                System.out.println("RISPOSTA MOLTO SBAGLIATA");

            }else{
                System.out.println("RISPOSTA SBAGLIATA");
            }

        }
        
    }

    }

    
}