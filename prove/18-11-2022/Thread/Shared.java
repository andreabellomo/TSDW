public class Shared{
    private int sample = 50;

    public synchronized void setValue(int value){
        sample = value;
    }

    public int getValue(){
        return sample;
    }

    public synchronized void waitShared() throws InterruptedException{
        wait();
    }

    public synchronized void notifyShared(){
        notifyAll();
    }
}