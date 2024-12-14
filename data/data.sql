create table Users (
User_ID   int auto_increment primary key,
Username varchar (50),
first_name varchar (50),
last_name varchar (50),
Pass_word varchar (50)
);

create table shoe_store (
	job_id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
    position VARCHAR (255),
	email VARCHAR(255),
	gender VARCHAR(255),
	home_address VARCHAR(255),
    nationality VARCHAR (255)
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


create table  activity_logs(
    log_id int auto_increment PRIMARY KEY,
    Username varchar (255),
    job_id varchar (255),
    position varchar (255),
    Operation varchar (255)
    date_added timestamp default CURRENT_TIMESTAMP
 
)



insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (1, 'Niall', 'O''Hickee', 'Computer Systems Analyst IV', 'nohickee0@walmart.com', 'Male', '17 Chinook Crossing', 'Bahamas', '2024-09-12T21:20:41Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (2, 'Flossie', 'McFadden', 'Database Administrator III', 'fmcfadden1@guardian.co.uk', 'Female', '9 Morningstar Place', 'China', '2024-05-27T10:54:52Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (3, 'Kara-lynn', 'Wrates', 'VP Quality Control', 'kwrates2@fda.gov', 'Female', '774 Di Loreto Pass', 'Bulgaria', '2024-09-06T23:36:26Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (4, 'Artemis', 'Lackington', 'Payment Adjustment Coordinator', 'alackington3@ezinearticles.com', 'Male', '4148 Roxbury Road', 'Portugal', '2024-05-20T18:30:18Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (5, 'Vinson', 'Samwyse', 'Payment Adjustment Coordinator', 'vsamwyse4@walmart.com', 'Male', '361 Spenser Park', 'Cuba', '2024-10-27T21:46:36Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (6, 'Cecilius', 'Paylie', 'Financial Analyst', 'cpaylie5@newyorker.com', 'Male', '103 Hermina Lane', 'Poland', '2024-03-30T06:13:04Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (7, 'Laverne', 'Lacase', 'Biostatistician I', 'llacase6@shop-pro.jp', 'Female', '92 Acker Trail', 'Kazakhstan', '2024-10-18T09:37:22Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (8, 'Abdel', 'Mapston', 'Chief Design Engineer', 'amapston7@blogs.com', 'Male', '5 Hintze Park', 'Peru', '2024-12-06T09:07:20Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (9, 'Lauree', 'Pedrick', 'Nuclear Power Engineer', 'lpedrick8@un.org', 'Polygender', '6 Fair Oaks Road', 'China', '2024-06-23T22:52:28Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (10, 'Red', 'Kacheller', 'Research Nurse', 'rkacheller9@accuweather.com', 'Male', '8578 Spenser Plaza', 'Thailand', '2024-01-25T06:18:36Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (11, 'Tabby', 'Ismirnioglou', 'Director of Sales', 'tismirniogloua@mozilla.org', 'Female', '07743 Loeprich Way', 'Ukraine', '2024-02-02T02:31:51Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (12, 'Peta', 'Simak', 'Product Engineer', 'psimakb@sun.com', 'Female', '47 Laurel Crossing', 'Malaysia', '2024-02-18T15:36:51Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (13, 'Allianora', 'Parram', 'Geological Engineer', 'aparramc@cnn.com', 'Female', '5 Novick Center', 'Tanzania', '2024-01-13T14:00:37Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (14, 'Shela', 'Gallichiccio', 'Speech Pathologist', 'sgallichicciod@jugem.jp', 'Female', '48674 Schmedeman Crossing', 'Indonesia', '2024-01-29T08:48:51Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (15, 'Garwood', 'Hugle', 'Internal Auditor', 'ghuglee@moonfruit.com', 'Male', '76932 Forster Terrace', 'France', '2024-12-29T12:17:15Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (16, 'Nananne', 'Abdy', 'Actuary', 'nabdyf@economist.com', 'Female', '1815 Hovde Plaza', 'Poland', '2024-09-25T21:15:54Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (17, 'Constanta', 'Thebes', 'General Manager', 'cthebesg@cdbaby.com', 'Female', '72756 Grim Trail', 'Ukraine', '2024-05-27T09:38:42Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (18, 'Stefa', 'Tart', 'Assistant Media Planner', 'starth@google.nl', 'Female', '25483 Dayton Center', 'Argentina', '2024-12-06T16:59:16Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (19, 'Nichol', 'Overstreet', 'Cost Accountant', 'noverstreeti@blog.com', 'Female', '95639 Valley Edge Lane', 'China', '2024-04-18T01:49:01Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (20, 'Corrianne', 'Life', 'Software Engineer II', 'clifej@wikipedia.org', 'Female', '6 Mallory Hill', 'South Korea', '2024-05-23T04:46:18Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (21, 'Murial', 'Adcocks', 'Account Coordinator', 'madcocksk@patch.com', 'Female', '96072 Londonderry Alley', 'China', '2024-06-20T10:51:54Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (22, 'Mikol', 'Kydd', 'Speech Pathologist', 'mkyddl@biblegateway.com', 'Male', '2 Aberg Avenue', 'Ukraine', '2024-09-07T03:07:09Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (23, 'Brewer', 'Hardy-Piggin', 'Account Coordinator', 'bhardypigginm@dropbox.com', 'Non-binary', '833 Kenwood Pass', 'Indonesia', '2024-05-23T15:51:36Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (24, 'Pepe', 'Sprules', 'VP Marketing', 'psprulesn@ning.com', 'Male', '57373 Sachtjen Street', 'Serbia', '2024-06-28T05:15:10Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (25, 'Mahmud', 'Shrubsall', 'Recruiting Manager', 'mshrubsallo@arizona.edu', 'Male', '8 Erie Place', 'China', '2024-12-22T09:37:46Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (26, 'Ruthi', 'Sleigh', 'Systems Administrator II', 'rsleighp@skype.com', 'Female', '26899 Judy Terrace', 'Russia', '2024-01-22T15:48:11Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (27, 'Elisha', 'Orkney', 'Quality Control Specialist', 'eorkneyq@tinyurl.com', 'Male', '03 Ronald Regan Drive', 'Russia', '2024-10-31T00:32:40Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (28, 'Birdie', 'Antoniades', 'Office Assistant III', 'bantoniadesr@bandcamp.com', 'Female', '30714 Artisan Parkway', 'Japan', '2024-05-01T11:51:21Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (29, 'Lyell', 'Windows', 'Account Coordinator', 'lwindowss@dailymotion.com', 'Male', '5 Helena Avenue', 'Philippines', '2024-04-22T02:59:55Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (30, 'Shae', 'Oldfield', 'Geologist II', 'soldfieldt@cnet.com', 'Female', '80699 Lakewood Gardens Point', 'France', '2024-05-23T19:18:40Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (31, 'Edin', 'Faulds', 'Recruiter', 'efauldsu@360.cn', 'Female', '31292 Grim Court', 'Thailand', '2024-02-17T02:07:44Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (32, 'Kyla', 'Silman', 'Research Nurse', 'ksilmanv@tamu.edu', 'Polygender', '00 Starling Center', 'Czech Republic', '2024-07-25T18:14:30Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (33, 'Theodosia', 'MacGragh', 'Programmer III', 'tmacgraghw@msn.com', 'Female', '21480 Carioca Street', 'Russia', '2024-11-03T14:40:27Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (34, 'Lorenzo', 'Happs', 'Analyst Programmer', 'lhappsx@cdbaby.com', 'Male', '1381 International Terrace', 'China', '2024-02-13T08:54:42Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (35, 'Teddy', 'Rapi', 'Registered Nurse', 'trapiy@nba.com', 'Male', '69 Carberry Center', 'Russia', '2024-07-13T09:37:23Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (36, 'Bartolomeo', 'Shah', 'Human Resources Manager', 'bshahz@addtoany.com', 'Male', '7591 Morningstar Alley', 'Indonesia', '2024-12-04T16:01:35Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (37, 'Gery', 'McKinnon', 'Sales Representative', 'gmckinnon10@slideshare.net', 'Male', '16 Steensland Road', 'Brazil', '2024-11-11T15:59:14Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (38, 'Stanislaus', 'Smeeton', 'Analyst Programmer', 'ssmeeton11@shop-pro.jp', 'Non-binary', '8 Cottonwood Center', 'Nigeria', '2024-02-10T03:08:59Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (39, 'Reggie', 'Cristofolini', 'Staff Accountant IV', 'rcristofolini12@fc2.com', 'Female', '63924 Morrow Point', 'Russia', '2024-09-06T03:47:57Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (40, 'Prentiss', 'Tyrer', 'VP Quality Control', 'ptyrer13@webs.com', 'Male', '953 Novick Road', 'Venezuela', '2024-02-22T23:02:36Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (41, 'Hazel', 'Thyer', 'Research Associate', 'hthyer14@delicious.com', 'Male', '515 Hoepker Court', 'Sweden', '2024-11-19T19:57:34Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (42, 'Joel', 'Gabbidon', 'Recruiting Manager', 'jgabbidon15@japanpost.jp', 'Male', '85 Ilene Way', 'United States', '2024-01-11T10:20:02Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (43, 'Brian', 'Levens', 'Junior Executive', 'blevens16@jalbum.net', 'Male', '12 Dapin Center', 'Norway', '2024-07-17T18:33:24Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (44, 'Elyse', 'Baron', 'Actuary', 'ebaron17@thetimes.co.uk', 'Female', '7 Jana Drive', 'Japan', '2024-10-20T15:45:43Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (45, 'Rodger', 'Wadesworth', 'Account Representative IV', 'rwadesworth18@odnoklassniki.ru', 'Male', '394 Crescent Oaks Point', 'China', '2024-03-11T05:11:26Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (46, 'Hillyer', 'Stellino', 'Structural Analysis Engineer', 'hstellino19@youtu.be', 'Male', '4737 Schurz Trail', 'Guatemala', '2024-11-07T00:32:09Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (47, 'Sarette', 'Brace', 'Developer IV', 'sbrace1a@people.com.cn', 'Female', '35413 Eagan Hill', 'Indonesia', '2024-05-13T13:59:24Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (48, 'Josey', 'Koenen', 'Safety Technician III', 'jkoenen1b@soup.io', 'Female', '304 Del Sol Crossing', 'Portugal', '2024-11-03T19:01:35Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (49, 'Robby', 'Fonzone', 'Physical Therapy Assistant', 'rfonzone1c@ucla.edu', 'Male', '7951 Dovetail Circle', 'Portugal', '2024-07-30T11:45:26Z');
insert into shoe_store (job_id, first_name, last_name, position, email, gender, home_address, nationality, date_added) values (50, 'Merrielle', 'Karlqvist', 'Software Consultant', 'mkarlqvist1d@amazon.co.uk', 'Female', '206 Pine View Court', 'Brazil', '2024-09-12T13:08:58Z');