--1 joinone  ennonei daneistes me desmeuseis emfanizontas mono sygkekrimena pedia me diaforetika onomata
 SELECT
  vehicle.Make As "Manufactor",
  vehicle.Year As "Year",
  vehicle.LicensePlate As "License Plate",
  fueltype.FuelType As "Fuel Type" 
FROM
  vehicle
 JOIN fueltype ON
  fueltype.LicensePlate = vehicle.LicensePlate
 WHERE
 vehicle.type = 'CAR';
 
 --2 jointwo enwnei tous pelates me ta store
SELECT
  *
FROM
	customer
	JOIN store ON
	customer.FirstRegistrationCity = store.City
	WHERE 
	store.StoreID <2;
 
--3 OrderBy taxinomisi fthinousas seiras me vash to onoma kai periorismos apotelesmatwn sta 8 prwta
SELECT * FROM customer
ORDER by LastName desc;
--limit 8;

--4 order by txinomish afxousa seiras me vash ton tupo tou oxhmatos
SELECT * FROM vehicle
ORDER by Type;

--5 GroupBy having ennonei pinakes lender kai commitment kai emfanizei ta onomata ekeinwn twn daneistwn poy exoyn kanei dyo kai perissoteres aithseis
SELECT 
customer.LastName,
customer.FirstName,
COUNT(*) as "NumberofRents" FROM (rents
INNER JOIN customer ON
  customer.CustomerID = rents.CustomerID)
GROUP BY customer.CustomerID
having count(*)>=2;

--6 GROUPBY deixnei poses aithseis exei kanei kathe xristis
SELECT LicensePlate, COUNT(*) As "Times Rented" FROM rents
GROUP BY LicensePlate;

--7 SUM,GROUPBY,ORDERBY,LIMIT,nested query epistrefei amaxi pou mas exei prosferei t perisotera xrhmata sasn etairia
select LicensePlate from vehicle
where  LicensePlate=(select LicensePlate from paymenttransaction c 
        group by c.LicensePlate 
        order by Sum(PaymentAmount) 
		DESC limit 1);

	
