package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car 
{
    // Atributes

    private Map<String, Map<String, Integer>> typeCarAccepted;
    private ArrayList<String> seatsMaterial;
    
    //Constructor 

    public UberVan(String license, Account driver, Map<String, Map<String, Integer>> typeCarAccepted,
    ArrayList<String> seatsMaterial)
    {
        super(license, driver);
        this.seatsMaterial = seatsMaterial;
        this.typeCarAccepted = typeCarAccepted;
    }

    // Getters & Setters

    public Map<String, Map<String, Integer>> getTypeCarAccepted() {
        return typeCarAccepted;
    }

    public void setTypeCarAccepted(Map<String, Map<String, Integer>> typeCarAccepted) {
        this.typeCarAccepted = typeCarAccepted;
    }

    public ArrayList<String> getSeatsMaterial() {
        return seatsMaterial;
    }

    public void setSeatsMaterial(ArrayList<String> seatsMaterial) {
        this.seatsMaterial = seatsMaterial;
    }

    // Methods 
    
    @Override
    public void setPassengers(Integer passengers) 
    {
        if(passengers == 6)
        {
        super.setPassengers(passengers);
        }else
        {
            System.out.println("Esta categoria solo acepta 6 pasajeros");
        }
    }

    
}
