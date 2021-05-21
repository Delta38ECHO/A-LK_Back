--Makes Device Table--

CREATE TABLE Device(
	Device_ID INT(20) NOT NULL PRIMARY KEY,
	User_ID VARCHAR(20) NOT NULL,
	Car_ID INT(20) NOT NULL,
	Model VARCHAR(20) NOT NULL,
	Active BOOLEAN NOT NULL,
	FOREIGN KEY (User_ID) REFERENCES Users (User_ID),
	FOREIGN KEY (Car_ID) REFERENCES Cars (Car_ID)
)Engine=MyISAM;

--Alter u_Access to use Device_ID too
ALTER TABLE u_Access ADD Device INT(20);
ALTER TABLE u_Access ADD FOREIGN KEY (Device) REFERENCES Device(Device_ID);