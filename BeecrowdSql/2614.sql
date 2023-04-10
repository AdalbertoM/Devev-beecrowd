select customers.name,rentals.rentals_date from customers
join rentals on customers.id = rentals.id_customers
where extract(month from rentals.rentals_date) = 9;