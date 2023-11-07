/*

import java.util.Random;

public class ThreadT1 extends Thread{

    Shared shared ;
    private int m;


    public ThreadT1(Shared shared){
        this.shared = shared;
        
    }

    public void run(){

        while(true){

        try{
            sleep(100);
        } catch(InterruptedException e){}

        Random rand = new Random();
        m = rand.nextInt(11);
        
        
            int x = shared.getShared();
            if(x == -1) return;
            if(m == x ){
                System.out.println("RISPOSTA CORRETTA");
                shared.setShared(-1);
                return;
            }else if (Math.abs(m-x) > 5){
                System.out.println("RISPOSTA MOLTO SBAGLIATA");

                try{
                    shared.waitShared();
                }catch(InterruptedException e){
                    e.printStackTrace();
                }
                continue;
            }else{
                System.out.println("RISPOSTA SBAGLIATA");
            }
    }

    }
}
*/

import java.util.Random;

public class ThreadT1 extends Thread{
  private int m;
  private Shared shared;

  public ThreadT1(Shared shared){
    this.shared = shared;
  }

  public void run(){
    while(true){
      try{
       sleep(100);
      }catch(InterruptedException e){e.printStackTrace();}
      Random r = new Random();
      m = r.nextInt(11);

      if(shared.getShared() == -1 ) return;
      if(shared.getShared() == m) {
        System.out.println("RISPOSTA CORRETTA");
        shared.setShared(-1);
        return;
      }
      
      if((Math.abs(m) - Math.abs(shared.getShared())) > 5){

        System.out.println("risposta MOLTO sbagliata");
        try{
          shared.waitShared();
        }catch(InterruptedException e){
          e.printStackTrace();
        }
        continue;
      }
      else {
        System.out.println("risposta sbagliata");
      }
    }
  }
  
}