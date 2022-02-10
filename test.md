@startuml
left to right direction
skinparam packageStyle rectangle
actor Super_user
actor Student
actor Warehouse_admin
actor Financial_admin
rectangle products {
Super_user --> (producten aanvragen) #line:red;line.bold;text:red
Super_user --> (producten goedkeuren) #line:red;line.bold;text:red
Super_user --> (producten weigeren) #line:red;line.bold;text:red
Student --> (producten aanvragen) #line:blue;line.bold;text:blue
Financial_admin --> (producten goedkeuren) #line:black;line.bold;text:black
Warehouse_admin --> (producten beheren)
Warehouse_admin --> (magazijn inzien)
Financial_admin --> (magazijn inzien) #line:black;line.bold;text:black
Super_user --> (magazijn inzien) #line:red;line.bold;text:red
}
@enduml


