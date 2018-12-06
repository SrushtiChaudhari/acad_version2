INSERT INTO Course VALUES 
(NULL,'Operating Systems','OS','os101','this the syllabus',1),
(NULL,'Computer Organizaton','CO','co101','this the syllabus',1),
(NULL,'Computer Networks','CN','cn101','this the syllabus',1);

INSERT INTO CourseCurriculumMapping VALUES 
(NULL,'1','1','1'),
(NULL,'2','2','2'),
(NULL,'3','3','3');

INSERT INTO Department VALUES 
(NULL,'Comp-It','Computer Engneering & Information Technology','CI101',1996,'020-1435','2353465765','compit@coep.ac.in'),
(NULL,'E&TC','Electronics And TeleCommunication','ETC101',1982,'020-1434','2353465745','etc@coep.ac.in'),(NULL,'Mech','Mechanical Engineering','M101',1800,'020-1432','2353465764','mech@coep.ac.in');

INSERT INTO Curriculum VALUES 
('1','1'),
('2','2'),
('3','3');

INSERT INTO ExamType VALUES 
(NULL,'1','100'),
(NULL,'2','100'),
(NULL,'3','100');

INSERT INTO Faculty (`FacultyID`,`DepartmentID`,`YearOfJoining`,`DateOfBirth`,`PermanentAddressLine1`,`PermanentAddressVillage`,`PermanentAddressTaluka`,`PermanentAddressDistrict`,`PermanentAddressState`,`PermanentAddressCountry`,`PermanentAddressPincode`,`TemporaryAddressLine1`,`TemporaryAddressVillage`,`TemporaryAddressTaluka`,`TemporaryAddressDistrict`,`TemporaryAddressState`,`TemporaryAddressCountry`,`TemporaryAddressPincode`,`CollegeEmail`,`PersonalEmail`,`ContactNo`,`RelievingDate`,`UniqueNo`,`Gender`,`BloodGroup`,`Caste`,`Religion`,`CasteCategory`,`IsHandicap`,`BankAccountNo`,`AadhaarID`,`BankName`,`BankBranchCode`,`BankBranch`,`FacultyName`) VALUES (NULL,1,2005,"2016-12-18 ","785-9629 A Street","Berlin","Berlin","Berlin","BE","Nigeria","5472","Ap #124-6360 Aliquam Road","Berlin","Berlin","Berlin","Hawaii","United Kingdom (Great Britain)","1335","luctus@Donecluctus.edu","pede.ultrices@Crasdolor.co.uk","034-953-0484","2009-03-20 ",26076,"male","A+","open,","hindu","category1","0",247186,272450,"Dillon Garcia",285299,"shivajinagar","Karly"),
(NULL,2,2004,"2001-10-28 ","317-3444 Luctus. St.","Mazzano Romano","Torre Cajetani","Castel di Tora","Lazio","Indonesia","4138","Ap #536-4485 Nonummy St.","Canterano","Casalvieri","Ronciglione","MA","Saudi Arabia","1559","varius.Nam.porttitor@tristiquesenectuset.ca","ipsum.Donec@risus.org","068-408-5325","2005-03-18 ",28416,"male","A+","open,","hindu","category1","0",272100,237509,"Ishmael Mercer",302434,"shivajinagar","Amy"), (NULL,3,2004,"2001-10-28 ","317-3444 Luctus. St.","Mazzano Romano","Torre Cajetani","Castel di Tora","Lazio","Indonesia","4138","Ap #536-4485 Nonummy St.","Canterano","Casalvieri","Ronciglione","MA","Saudi Arabia","1559","varius.Nam.porttitor@tristiquesenectuset.ca","ipsum.Donec@risus.org","068-408-5325","2005-03-18 ",28416,"male","A+","open,","hindu","category1","0",272100,237509,"Ishmael Mercer",302434,"shivajinagar","Amy");


INSERT INTO FacultyAttendance VALUES 
(NULL,'1','2018-11-3','1'),
(NULL,'2','2018-11-3','0'),
(NULL,'3','2018-11-3','0');


INSERT INTO FacultyExperience VALUES 
(NULL,'1','Manish','Professor', '2010-01-01', '2016-10-01'),
(NULL,'2','EQ','Coder', '2009-01-01', '2016-10-01'),
(NULL,'3','Think Analytics','Data Scientist', '2001-01-01', '2016-10-01');

INSERT INTO FacultyQualification VALUES
(NULL,'1', 'Btech', 'COEP', '3', '2015'),
(NULL,'2', 'Btech', 'VJTI', '3', '2010'),
(NULL,'3', 'Mtech', 'SPCE', '3', '2008');


INSERT INTO FacultyRequestTypes VALUES 
(NULL,'Academic Calendar'),
(NULL,'Request for stationary'),
(NULL,'Time TBLE');

INSERT INTO FacutyRequests VALUES
(NULL,'1', 'Academic CAlendar', 'Renewal', '1', 'Pending'),
(NULL,'2', 'Paper time table', 'Renewal', '2', 'Pending'),
(NULL,'3','Time table','Done','3','Done');

INSERT INTO FacutyResponses VALUES 
(NULL,'1','1','Seen','1'), 
(NULL,'2','2','Not seen','0'),
(NULL,'3','3','Seen','0');

INSERT INTO FeedbackCategory VALUES 
(NULL,'End Feedback'),
(NULL,'Mid Sem Feedback'),
(NULL,'End Sem Feedback');


INSERT INTO Program VALUES 
(NULL,'1','1','Computer Engineering','Bachelor Of Technology',2013,'CE101','Comp13',1996),
(NULL,'2','2','Information Technology','Bachelor Of Technology',2013,'IT101','It13',1996),
(NULL,'3','3','Computer Science','Bachelor Of Technology',2013,'CS101','Cs13',1996);

INSERT INTO Semester VALUES 
(NULL,'1','1','8','40','semType1','5','1'),
(NULL,'2','2','8','40','semType1','5','1'),
(NULL,'3','3','8','40','semType1','5','1');


INSERT INTO LogTable VALUES 
(NULL,'1','20:10:19','1','20:10:29'),
(NULL,'2','21:9:01','2','20:1:1'),
(NULL,'3','20:9:9','3','20:01:01');


INSERT INTO Student (`StudentEnrollmentNumber`,`ProgramID`,`FirstName`,`MiddleName`,`LastName`,`MotherName`,`Gender`,`DOB`,`BloodGroup`,`TempAddrLine1`,`TempAddrTaluka`,`TempAddrDistrict`,`TempAddrState`,`TempAddrCountry`,`TempAddrPostalCode`,`PermAddrLine1`,`PermAddrTaluka`,`PermAddrDistrict`,`PermAddrState`,`PermAddrCountry`,`ContactNo`,`PermAddrPostalCode`,`PermAddrContact`,`EmergencyContactNo`,`CollegeEmail`,`PersonalEmail`,`Caste`,`Religion`,`CasteCategory`,`IsHandicapped`,`IsCurrent`,`AadharID`,`BannkAcNumber`,`BankName`,`BankBranchName`,`BankBranchCode`) VALUES (NULL,1,"Florence","Evan","Brooks","Sheila","female","2005-11-02 ","A+","2464 Luctus St.","Gjoa Haven","Arviat","Nunavut","Barbados","3320","P.O. Box 306, 2692 Scelerisque St.","Arviat","Gjoa Haven","Noord Holland","India","(09) 0444 3960","2600","(05) 7539 8825","(850) 787-5936","Quisque@Phasellusin.co.uk","eleifend.Cras@tellus.net","open","Hindu","open","0","1",148850,268897,"Strickland","shivajinagar",282626),(NULL,2,"Savannah","Keith","Zimmerman","Kirsten","female","2010-12-20 ","A+","4166 Proin Road","Vienna","Vienna","Wie","Czech Republic","3995","888-8277 Fusce Street","Vienna","Vienna","MI","Cape Verde","(05) 0597 1780","3403","(04) 6225 9921","(353) 756-3126","accumsan@Nullam.net","orci@sagittis.net","open","Hindu","open","0","1",143067,312388,"Caldwell","shivajinagar",294268),(NULL,3,"Savannah","Keith","Zimmerman","Kirsten","female","2010-12-20 ","A+","4166 Proin Road","Vienna","Vienna","Wie","Czech Republic","3995","888-8277 Fusce Street","Vienna","Vienna","MI","Cape Verde","(05) 0597 1780","3403","(04) 6225 9921","(353) 756-3126","accumsan@Nullam.net","orci@sagittis.net","open","Hindu","open","0","1",143067,312388,"Caldwell","shivajinagar",294268);

INSERT INTO SemesterRegistration VALUES 
(NULL,'1','1','1','2015-04-12','Pending','8'),
(NULL,'2','2','2','2015-04-12','Done','8'),
(NULL,'3','3','3','2015-04-12','Done','8');



INSERT INTO Exam VALUES 
(NULL,'1','1', '1', 'Manual', '2016-10-01', '30', '1:12:19', 'Pune'),
(NULL,'2','2', '2', 'Manual', '2016-10-01', '30', '1:12:19', 'Pune'),
(NULL,'3','3', '3', 'Manual', '2016-10-01', '30', '1:12:19', 'Pune');

INSERT INTO Enrollment VALUES 
(NULL,'1','1','1','1','0','0','10'),
(NULL,'2','2','2','2','0','0','10'),
(NULL,'3','3','3','3','0','0','10');


INSERT INTO FacultyCourseMapping VALUES 
(NULL,'1','1','1'),
(NULL,'2','2','2'),
(NULL,'3','3','3');

INSERT INTO StudentAdmission VALUES 
(NULL,'1','2016-08-30', '2016', 'CAP round', '30', '03','53', 'Open'),
(NULL,'2','2016-08-30', '2015', 'CAP round', '30', '30','103', 'Open'),
(NULL,'3','2016-08-31', '2016', 'CAP round', '30', '30','334', 'Open');


INSERT INTO StudentFeedback VALUES 
(NULL,'1','7', '10', '1', '1', '8','10', '5', '6', '9', '7', 'Good'),
(NULL,'2','8', '10', '10', '2', '8','10', '5', '9', '9', '7', 'Good'),
(NULL,'3','9', '3', '9', '8', '8','10', '7', '9', '9', '7', 'Good');


INSERT INTO StudentRequestTypes VALUES
(NULL, 'Academic Calendar'),
(NULL, 'Calendar'),
(NULL, 'Time Tble');

INSERT INTO StudentAttendance VALUES 
(NULL,'1','2016-07-30','1'),
(NULL,'2','2016-07-30','0'),
(NULL,'3','2016-08-01','0');


INSERT INTO StudentRequests VALUES 
(NULL,'1','1','Physics','Paper pattern','No'),
(NULL,'2','2','Maths','grading','No'),
(NULL,'3','3','Applied Science','Grading','No');


INSERT INTO StudentResponses VALUES 
(NULL,'1','1', 'Corrected','1'), 
(NULL,'2','2', 'Not veirfied yet','0'),
(NULL,'3','3', 'Seen','0');

INSERT INTO StudentExamScore VALUES 
(NULL,'1','1', '80'), 
(NULL,'2','2', '60'), 
(NULL,'3','3', '60');

INSERT INTO StudentSemAcademicRecord VALUES 
(NULL,'1','1','80','1','0'),
(NULL,'2','2','60','1','0'),
(NULL,'3','3','60','1','0');

