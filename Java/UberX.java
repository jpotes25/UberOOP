package Java;


public class UberX extends Car
{
    // Atributes

    private String brand;
    private String model;
    
    // Constructor

    public UberX(String license, Account driver, String brand, String model)
    {
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }
    
    // Getters & Setters

    public String getBrand() {
        return brand;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }

    //Methods 

    @Override
    public void setPassengers(Integer passengers) 
    {
        if(passengers == 4)
        {
        super.setPassengers(passengers);
        }else
        {
            System.out.println("Esta categoria solo acepta 4 pasajeros");
        }
    }

    
}
