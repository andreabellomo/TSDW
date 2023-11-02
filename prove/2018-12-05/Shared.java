public class Shared{
    private int m =0;

    public int getShared(){
        return m ;
    } 

    public synchronized void setShared (int value){
        this.m = value;
    } 
}