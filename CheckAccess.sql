--Query DB so that the user with ID 'x' can see who has access to their vehicle.

SELECT * FROM u_Access
WHERE Master_ID = 1;

--Maybe make a script where it shows what cars are owned by who.

SELECT Car_ID, User_ID, CarModel 
FROM Cars 
ORDER BY LENGTH(User_ID), User_ID;
