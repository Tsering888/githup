






-- Eval exo_1 




DROP DATABASE IF EXISTS exo_1 ;
CREATE DATABASE exo_1;
USE exo_1;


CREATE TABLE client (
            cli_num INT NOT NULL PRIMARY KEY, 
             cli_nom VARCHAR(50),
             cli_adresse varchar(50),
              cli_tel varchar(30)
                );
                     
 CREATE TABLE commande (
                    com_num int PRIMARY KEY,
                      cli_num int,
                      com_date datetime,
                      com_abs varchar(50),
                      CONSTRAINT FOREIGN KEY(com_num) REFERENCES client(cli_num)
                      );     
   
                                                                             
  CREATE TABLE produit (
                       pro_num int PRIMARY KEY,
                      pro_libelle varchar(50),
                      pro_description varchar(50)
                      
                      );                                                                                       
 CREATE TABLE est_compose (
                      com_num int , 
                      pro_num int ,
                      est_qte int,
     					PRIMARY KEY (com_num,pro_num),
                       CONSTRAINT FOREIGN KEY(com_num) REFERENCES commande(com_num),
                        CONSTRAINT FOREIGN KEY (pro_num) REFERENCES produit(pro_num)
                                                                             
                      );                                     
                        
 CREATE UNIQUE INDEX cli_nom ON client(cli_nom);
SHOW INDEX client                                                                                            



                                                                             
-- Eval exo_2
-- Exercice 1

SELECT CompanyName, ContactName,ContactTitle, Phone from northwind.customers
where Country = 'France'

-- Exercice 2

SELECT ProductName, UnitPrice from northwind.products 
where SupplierID=1

--Exercice 3
SELECT CompanyName, count(UnitsOnOrder) as 'Nombre produits'
FROM Suppliers 
Join Products on Products.SupplierID = Suppliers.SupplierID
WHERE Country ='France'
GROUP BY CompanyName
ORDER BY COUNT(UnitsOnOrder) DESC



-- Exercice 4

SELECT CompanyName ,COUNT(Quantity) FROM customers 
JOIN orders ON customers.CustomerID = orders.CustomerID 
JOIN order_details ON orders.OrderID = order_details.OrderID 
WHERE Country='France' AND COUNT(Quantity)>10
GROUP BY CompanyName
ORDER BY COUNT(Quantity)

-- Exercice 5

SELECT CompanyName as 'client', SUM(UnitPrice*Quantity) AS 'CA' FROM northwind.customers
JOIN orders ON customers.CustomerID=orders.CustomerID
JOIN order_details ON orders.OrderID=order_details.OrderID
GROUP BY CompanyName
HAVING SUM(UnitPrice*Quantity)>30000
ORDER BY SUM(UnitPrice*Quantity) DESC


-- Exercice 6

SELECT ShipCountry
FROM northwind.Orders
JOIN Order_Details on Order_Details.OrderID = Orders.OrderID 
JOIN Products on Products.ProductID = Order_Details.ProductID
JOIN Suppliers on Suppliers.SupplierID = Products.SupplierID
WHERE Suppliers.CompanyName = 'exotic liquids'
GROUP BY ShipCountry


-- Exercice 7

SELECT SUM(UnitPrice*Quantity) as 'Montant Ventes 1997' FROM order_details
JOIN orders ON order_details.OrderID=orders.OrderID
WHERE orderdate BETWEEN ('1997-01-01 00:00:00') AND ('1997-12-31 00:00:00')


-- Exercice 8

SELECT month(orderdate) as 'mois 97', SUM(UnitPrice*Quantity) as 'Montant Ventes' FROM order_details
JOIN orders ON order_details.OrderID=orders.OrderID
WHERE year(orderdate) =1997
GROUP BY month(orderdate)

-- Exercice 9

SELECT MAX(orderdate) as' Date de derniere commande' FROM orders
WHERE customerID='DUMON'

-- Exercice 10

SELECT ROUND(AVG(DAtediff (ShippedDate, OrderDate))) FROM orders