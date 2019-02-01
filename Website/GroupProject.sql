CREATE TABLE Company(
	CompanyID int NOT NULL AUTO_INCREMENT,
	Name VARCHAR(30),
	PRIMARY KEY(CompanyID)
);

CREATE TABLE Camera(
	CameraID int NOT NULL AUTO_INCREMENT,
	FrontCamera BOOLEAN,
	RearCamera BOOLEAN,,
	NumCameras int(1),
	CameraSize VARCHAR(30),
	PRIMARY KEY(CameraID)
);


CREATE TABLE ScreenType(
	ScreenTypeID int NOT NULL AUTO_INCREMENT,
	Size VARCHAR(10),
	Resolution VARCHAR(10),
	PRIMARY KEY(ScreenTypeID)
);

CREATE TABLE Phone(
	PhoneID int NOT NULL AUTO_INCREMENT,
	CompanyID int,
	CameraID int,
	ScreenTypeID int,
	PhoneName VARCHAR(15),
	CompanyName VARCHAR(15),
	Model VARCHAR(20),
	BatterySize VARCHAR(15),
	YearMade int(4),
	UnitPrice VARCHAR(6),
	OS VARCHAR(20),
	NumRAM int(1),
	Color VARCHAR(10),
	HeadPhoneJack VARCHAR(10),
	PRIMARY KEY(PhoneID),
	FOREIGN KEY (CompanyID) REFERENCES Company(CompanyID),
	FOREIGN KEY (CameraID) REFERENCES Camera(CameraID),
	FOREIGN KEY (ScreenTypeID) REFERENCES ScreenType(ScreenTypeID)
);


INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("Pixel 3", "Google", "GA00463-US", "2,915 mAh", 2018, "$800", "Android 9.0 Pie", 4, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("Pixel 3XL", "Google", "GA00475-US", "3,340 mAh", 2018, "$900", "Android 9.0 Pie", 4, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("iPhone XS Max", "Apple", "MT5C2LL/A", "3,173 mAh", 2018, "$1100", "Apple iOS 12", 4, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("iPhone XS", "Apple", "MT962LL/A", "2,658 mAh", 2018, "$1000", "Apple iOS 12", 4, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("iPhone XR", "Apple", "MRYT2LL/A", "2,942 mAh", 2018, "$750", "Apple iOS 12", 3, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("6T", "OnePlus", "IDK", "3700 mAh", 2018, "$530", "OxygenOS", 6, "Black", "False");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("Note9", "Samsung", "SMN960UZBV", "4,000 mAh", 2018, "$1000", "Android 8.1 Oreo", 6, "Black", "True");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("Galaxy S9", "Samsung", "SMG960UZDV", "3,000 mAh", 2018, "$790", "Android 8.0 Oreo", 4, "Gold", "True");

INSERT INTO Phone ( PhoneName, CompanyName, Model, BatterySize, YearMade, UnitPrice, OS, NumRAM, Color, HeadPhoneJack )
VALUES ("Galaxy S9+", "Samsung", "SM-G965UZKAXAA", "3,500 mAh", 2018, "$840", "Android 8.0 Oreo", 6, "Black", "True");




INSERT INTO Company ( Name ) VALUES ("Google");

INSERT INTO Company ( Name ) VALUES ("Google");

INSERT INTO Company ( Name )
VALUES ("Apple");

INSERT INTO Company ( Name )
VALUES ("Apple");

INSERT INTO Company ( Name )
VALUES ("Apple");

INSERT INTO Company ( Name )
VALUES ("Oneplus");

INSERT INTO Company ( Name )
VALUES ("Samsung");

INSERT INTO Company ( Name )
VALUES ("Samsung");

INSERT INTO Company ( Name )
VALUES ("Samsung");




INSERT INTO Camera(FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1, 1, 2, "12 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1 2, "12.2 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "18 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "18 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 1, "10 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "20 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "22 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "21 MP");

INSERT INTO Camera( FrontCamera, RearCamera, NumCameras, CameraSize)
VALUES (1,1, 2, "21 MP");




INSERT INTO ScreenType( Size, Resolution)
VALUES ("5.5", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("5.5", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("6.4", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("5.8", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("6.1", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("6.4", "1080p");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("6.4", "4k");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("6.2", "4k");

INSERT INTO ScreenType( Size, Resolution)
VALUES ("5.8", "4k");
