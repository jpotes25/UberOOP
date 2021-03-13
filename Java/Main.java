
package Java;
class Main 
{
    public static void main(String[] args) 
    {
        System.out.println("Hola mundo");
        Car car = new Car("VRC81D", new Account("David Potes", "1006116326"));    
        car.passengers = 4;
        car.printDataCar();

        Car car2 = new Car("OLC47C", new Account("Javier Potes", "93355322"));
        car2.license = "OLC47C";
        
        car2.passengers = 2;
        car2.printDataCar();
    }
    
}