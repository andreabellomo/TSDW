public class Container{
    
    private static int contents = 0;
    public boolean disponibile = false;
    
    public synchronized void put(int num){

        while(disponibile == true){
            try{
                wait();

            }catch (InterruptedException e) { }

            disponibile = true;
             contents = num;
            notifyAll();
        
        }

    }

    public synchronized int get(){

        while(disponibile == false){
            try{
                wait();
        }catch (InterruptedException e) { }

    
        }

        disponibile = false;
        notifyAll();
        return contents;

    }

}