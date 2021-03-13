package Java;

import java.util.Map;
import java.util.ArrayList;



public class UberBlack extends Car
{
    
    Map<String, Map<String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberBlack(String license, Account driver, Map<String, Map<String, Integer>> typeCarAccepted,
    ArrayList<String> seatsMaterial)
    {
        super(license, driver);
        this.seatsMaterial = seatsMaterial;
        this.typeCarAccepted = typeCarAccepted;
    }
}
