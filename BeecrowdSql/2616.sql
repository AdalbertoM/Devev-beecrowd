select customers.id, customers.name from customers
where customers.id not in(select locations.id_customers
from locations where locations.id_customers =customers.id);