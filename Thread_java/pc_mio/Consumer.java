public class Consumer extends Thread{

    public Container container ;
    public String name ;

    public Consumer(String name, Container container){

        this.name = name;
        this.container =  container;
    }

    public void run(){

        
        System.out.println(name+" C: inizio");
        int num = 0;

        while(num != -1){
            num = container.get();
            System.out.println(name + " prelievo " + num);
        }
        System.out.println(name+" C: termino");
    }

}