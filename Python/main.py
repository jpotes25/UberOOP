from car import Car
from account import Account

print("Hola Mundo")

car = Car("VRC81D", Account("David Potes", "1006116326"))
print(vars(car))
print(vars(car.driver))
