package Java;

public class PayPal extends Payment
{
    // Atribute

    private String email;

    // Constructor

    public PayPal(String email)
    {
        this.email = email;
    }

    // Getters & Setters

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    // Methods
}