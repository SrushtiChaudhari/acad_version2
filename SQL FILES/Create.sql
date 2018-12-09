DROP DATABASE acaddb;
CREATE DATABASE acaddb;
USE acaddb;

CREATE TABLE Department (
  DepartmentID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DepartmentAbbreviation VARCHAR(45) NULL,
  DepartmentName VARCHAR(45) NOT NULL,
  DepartmentCode VARCHAR(20) NULL,
  EstablishmentYear INTEGER NULL,
  FaxNo VARCHAR(20) NULL,
  PhoneNo VARCHAR(20) NULL,
  Email VARCHAR(20) NULL,
  PRIMARY KEY(DepartmentID)
);


CREATE TABLE LogTable (
  LogID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ModifiedBy INTEGER UNSIGNED NULL,
  ModefiedOn TIME NULL,
  CreatedBy INTEGER UNSIGNED NULL,
  CreatedOn DATETIME NULL,
  PRIMARY KEY(LogID)
);

CREATE TABLE ExamType (
  ExamTypeID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ExamName INTEGER UNSIGNED NULL,
  MaxMark INTEGER UNSIGNED NULL,
  PRIMARY KEY(ExamTypeID)
);

CREATE TABLE FeedbackCategory (
  FeedbackCategoryID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FeedbackCategoryName VARCHAR(20) NULL,
  PRIMARY KEY(FeedbackCategoryID)
);


CREATE TABLE Course (
  CourseID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CourseName VARCHAR(45) NULL,
  CourseAbbreviation VARCHAR(20) NULL,
  CourseCode VARCHAR(20) NULL,
  SyllabusCode VARCHAR(255) NULL,
  IsTheory BOOL NULL,
  PRIMARY KEY(CourseID)
)
 ;

CREATE TABLE Faculty (
  FacultyID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DepartmentID INTEGER UNSIGNED NOT NULL,
  YearOfJoining  INTEGER NULL,
  DateOfBirth DATE NULL,
  PermanentAddressLine1 VARCHAR(45) NULL,
  PermanentAddressVillage VARCHAR(45) NULL,
  PermanentAddressTaluka VARCHAR(45) NULL,
  PermanentAddressDistrict VARCHAR(45) NULL,
  PermanentAddressState VARCHAR(45) NULL,
  PermanentAddressCountry VARCHAR(45) NULL,
  PermanentAddressPincode VARCHAR(20) NULL,
  TemporaryAddressLine1 VARCHAR(45) NULL,
  TemporaryAddressVillage VARCHAR(45) NULL,
  TemporaryAddressTaluka VARCHAR(45) NULL,
  TemporaryAddressDistrict VARCHAR(45) NULL,
  TemporaryAddressState VARCHAR(45) NULL,
  TemporaryAddressCountry VARCHAR(45) NULL,
  TemporaryAddressPincode VARCHAR(20) NULL,
  CollegeEmail VARCHAR(60) NULL,
  PersonalEmail VARCHAR(60) NULL,
  ContactNo VARCHAR(20) NULL,
  EmergencyContactNo VARCHAR(20) NULL,
  RelievingDate DATE NULL,
  UniqueNo VARCHAR(20) NULL,
  Gender VARCHAR(10) NULL,
  BloodGroup VARCHAR(5) NULL,
  Caste VARCHAR(20) NULL,
  Religion VARCHAR(20) NULL,
  CasteCategory VARCHAR(50) NULL,
  IsHandicap BOOL NULL,
  BankAccountNo VARCHAR(20) NULL,
  AadhaarID VARCHAR(20) NULL,
  Photo BLOB NULL,
  BankName VARCHAR(20) NULL,
  BankBranchCode VARCHAR(20) NULL,
  BankBranch VARCHAR(20) NULL,
  FacultyName VARCHAR(20) NULL,
  PRIMARY KEY(FacultyID),
  FOREIGN KEY(DepartmentID)
    REFERENCES Department(DepartmentID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
 ;

CREATE TABLE CourseCurriculumMapping (
  CourseCurriculumMappingID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CourseID INTEGER UNSIGNED NOT NULL,
  CourseCredits INTEGER UNSIGNED NULL,
  SemesterNumber INTEGER UNSIGNED NULL,
  PRIMARY KEY(CourseCurriculumMappingID),
  FOREIGN KEY(CourseID)
    REFERENCES Course(CourseID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE FacultyAttendance (
  FacultyAttendanceID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  Date DATE NULL,
  IsPresent BOOL NULL,
  PRIMARY KEY(FacultyAttendanceID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE FacultyExperience (
  FacultyExperienceID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  EmployerName VARCHAR(45) NULL,
  Designation VARCHAR(20) NULL,
  FromDate DATE NULL,
  ToDate DATE NULL,
  PRIMARY KEY(FacultyExperienceID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE Curriculum (
  CurriculumID INTEGER UNSIGNED NOT NULL ,
  CourseCurriculumMappingID INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(CurriculumID,CourseCurriculumMappingID),
  FOREIGN KEY(CourseCurriculumMappingID)
    REFERENCES CourseCurriculumMapping(CourseCurriculumMappingID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
 ;

CREATE TABLE Program (
  ProgramID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CurriculumID INTEGER UNSIGNED NOT NULL,
  DepartmentID INTEGER UNSIGNED NOT NULL,
  BranchName VARCHAR(45) NULL,
  DegreeName  VARCHAR(45) NULL,
  PogramAdmissionYear  YEAR NULL,
  ProgramCode VARCHAR(45) NULL,
  ProgramAbbreviation VARCHAR(20) NULL,
  LaunchYear YEAR NULL,
  PRIMARY KEY(ProgramID),
  FOREIGN KEY(DepartmentID)
    REFERENCES Department(DepartmentID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(CurriculumID)
    REFERENCES Curriculum(CurriculumID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
)
 ;

CREATE TABLE Exam (
  ExamID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  CourseID INTEGER UNSIGNED NOT NULL,
  ExamTypeID INTEGER UNSIGNED NOT NULL,
  EvaluationType VARCHAR(50) NULL,
  Date DATE NULL,
  Duration DECIMAL NULL,
  Time TIME NULL,
  Place VARCHAR(20) NULL,
  PRIMARY KEY(ExamID),
  FOREIGN KEY(ExamTypeID)
    REFERENCES ExamType(ExamTypeID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(CourseID)
    REFERENCES Course(CourseID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE FacultyQualification (
  FacultyQualificationID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  QualificationName VARCHAR(20) NULL,
  CollegeName VARCHAR(20) NULL,
  QualificationLevel VARCHAR(50) NULL,
  YearOfPassing  YEAR NULL,
  PRIMARY KEY(FacultyQualificationID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE Semester (
  SemesterID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ProgramID INTEGER UNSIGNED NOT NULL,
  MaxCredit INTEGER UNSIGNED NULL,
  MinCredit INTEGER UNSIGNED NULL,
  DurationInMonths DECIMAL NULL,
  SemesterType VARCHAR(50) NULL,
  SemesterNumber INTEGER UNSIGNED NULL,
  IsCurrent BOOL NULL,
  PRIMARY KEY(SemesterID),
  FOREIGN KEY(ProgramID)
    REFERENCES Program(ProgramID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE Student (
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ProgramID INTEGER UNSIGNED NOT NULL,
  FirstName VARCHAR(20) NULL,
  MiddleName VARCHAR(20) NULL,
  LastName VARCHAR(20) NULL,
  MotherName VARCHAR(20) NULL,
  Gender VARCHAR(15) NULL,
  DOB DATE NULL,
  BloodGroup VARCHAR(20) NULL,
  TempAddrLine1 VARCHAR(45) NULL,
  TempAddrTaluka VARCHAR(45) NULL,
  TempAddrDistrict VARCHAR(45) NULL,
  TempAddrState VARCHAR(45) NULL,
  TempAddrCountry VARCHAR(45) NULL,
  TempAddrPostalCode VARCHAR(20) NULL,
  PermAddrLine1 VARCHAR(45) NULL,
  PermAddrTaluka VARCHAR(45) NULL,
  PermAddrDistrict VARCHAR(45) NULL,
  PermAddrState VARCHAR(45) NULL,
  PermAddrCountry VARCHAR(45) NULL,
  ContactNo VARCHAR(20) NULL,
  PermAddrPostalCode VARCHAR(20) NULL,
  PermAddrContact VARCHAR(20) NULL,
  EmergencyContactNo VARCHAR(20) NULL,
  CollegeEmail VARCHAR(60) NULL,
  PersonalEmail VARCHAR(60) NULL,
  Caste VARCHAR(20) NULL,
  Religion VARCHAR(20) NULL,
  CasteCategory VARCHAR(20) NULL,
  IsHandicapped BOOL NULL,
  IsCurrent BOOL NULL,
  AadharID VARCHAR(20) NULL,
  Photo BLOB NULL,
  BannkAcNumber VARCHAR(20) NULL,
  BankName VARCHAR(20) NULL,
  BankBranchName VARCHAR(20) NULL,
  BankBranchCode VARCHAR(20) NULL,
  PRIMARY KEY(StudentEnrollmentNumber),
  FOREIGN KEY(ProgramID)
    REFERENCES Program(ProgramID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE StudentAdmission (
  StudentAdmissionID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL,
  AdmissionDate DATE NULL,
  AdmissionYear YEAR NULL,
  AdmissionType VARCHAR(50) NULL,
  MeritMarks1 DECIMAL NULL,
  MeritMarks2 DECIMAL NULL,
  MeritRank INTEGER UNSIGNED NULL,
  AdmissionCategory VARCHAR(50) NULL,
  PRIMARY KEY(StudentAdmissionID),
  FOREIGN KEY(StudentEnrollmentNumber)
    REFERENCES Student(StudentEnrollmentNumber)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE StudentSemAcademicRecord (
  StudentAcademicRecordID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  SemesterID INTEGER UNSIGNED NOT NULL,
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL,
  SemScore INTEGER UNSIGNED NULL,
  IsPassed BOOL NULL,
  IsDebarred BOOL NULL,
  PRIMARY KEY(StudentAcademicRecordID),
  FOREIGN KEY(StudentEnrollmentNumber)
    REFERENCES Student(StudentEnrollmentNumber)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(SemesterID)
    REFERENCES Semester(SemesterID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE SemesterRegistration (
  RegistrationID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  SemesterID INTEGER UNSIGNED NOT NULL,
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL,
  Date DATE NULL,
  RegistrationStatus VARCHAR(50) NULL,
  CreditsTaken INTEGER UNSIGNED NULL,
  PRIMARY KEY(RegistrationID),
  FOREIGN KEY(StudentEnrollmentNumber)
    REFERENCES Student(StudentEnrollmentNumber)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(SemesterID)
    REFERENCES Semester(SemesterID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE FacultyCourseMapping (
  FacultyCourseMappingID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  SemesterID INTEGER UNSIGNED NOT NULL,
  CourseID INTEGER UNSIGNED NOT NULL,
  FacultyID INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(FacultyCourseMappingID, SemesterID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(CourseID)
    REFERENCES Course(CourseID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(SemesterID)
    REFERENCES Semester(SemesterID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE Enrollment (
  EnrollmentID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL,
  SemesterID INTEGER UNSIGNED NOT NULL,
  CourseID INTEGER UNSIGNED NOT NULL,
  IsCurrentlyEnrolled BOOL NULL,
  IsDetained BOOL NULL,
  IsBacklog BOOL NULL,
  CourseGrade DECIMAL NULL,
  PRIMARY KEY(EnrollmentID),
  FOREIGN KEY(CourseID)
    REFERENCES Course(CourseID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(SemesterID)
    REFERENCES Semester(SemesterID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(StudentEnrollmentNumber)
    REFERENCES Student(StudentEnrollmentNumber)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE StudentAttendance (
  StudentAttendanceID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  EnrollmentID INTEGER UNSIGNED NOT NULL,
  Date DATE NULL,
  IsPresent BOOL NULL,
  PRIMARY KEY(StudentAttendanceID),
  FOREIGN KEY(EnrollmentID)
    REFERENCES Enrollment(EnrollmentID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE StudentFeedback (
  StudentFeedbackID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  EnrollmentID INTEGER UNSIGNED NOT NULL,
  FeedbackCategory1Marks INTEGER UNSIGNED NULL,
  Category2Marks INTEGER UNSIGNED NULL,
  Category3Marks INTEGER UNSIGNED NULL,
  Category4Marks INTEGER UNSIGNED NULL,
  Category5Marks INTEGER UNSIGNED NULL,
  Category6Marks INTEGER UNSIGNED NULL,
  Category7Marks INTEGER UNSIGNED NULL,
  Category8Marks INTEGER UNSIGNED NULL,
  Category9Marks INTEGER UNSIGNED NULL,
  Category10Marks INTEGER UNSIGNED NULL,
  Remarks VARCHAR(255) NULL,
  PRIMARY KEY(StudentFeedbackID),
  FOREIGN KEY(EnrollmentID)
    REFERENCES Enrollment(EnrollmentID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


CREATE TABLE StudentExamScore (
  StudentExamScoreID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  EnrollmentID INTEGER UNSIGNED NOT NULL,
  ExamID INTEGER UNSIGNED NOT NULL,
  StudentExamScore INTEGER UNSIGNED NULL,
  PRIMARY KEY(StudentExamScoreID),
  FOREIGN KEY(ExamID)
    REFERENCES Exam(ExamID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(EnrollmentID)
    REFERENCES Enrollment(EnrollmentID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE FacultyRequestTypes(
  FacultyRequestTypeID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyRequestTypeName VARCHAR(100) NOT NULL,
  PRIMARY KEY(FacultyRequestTypeID)
);

CREATE TABLE StudentRequestTypes(
  StudentRequestTypeID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  StudentRequestTypeName VARCHAR(100) NOT NULL,
  PRIMARY KEY(StudentRequestTypeID)
);

CREATE TABLE FacutyRequests(
  FacultyRequestID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyID INTEGER UNSIGNED NOT NULL,
  FacultyRequestSubject VARCHAR(200) NOT NULL,
  FacultyRequestDetails VARCHAR(500) NOT NULL,
  FacultyRequestTypeID INTEGER UNSIGNED NOT NULL,
  FacultyRequestStatus VARCHAR(20) NOT NULL,
  PRIMARY KEY(FacultyRequestID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(FacultyRequestTypeID)
    REFERENCES FacultyRequestTypes(FacultyRequestTypeID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE FacutyResponses(
  FacultyResponseID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  FacultyRequestID INTEGER UNSIGNED NOT NULL,
  FacultyID INTEGER UNSIGNED NOT NULL,
  FacultyResponse VARCHAR(200) NOT NULL,
  IsApproved BOOL NULL,
  PRIMARY KEY(FacultyResponseID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(FacultyRequestID)
    REFERENCES FacutyRequests(FacultyRequestID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE StudentRequests(
  StudentRequestID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  StudentEnrollmentNumber INTEGER UNSIGNED NOT NULL,
  StudentRequestTypeID INTEGER UNSIGNED NOT NULL,
  StudentRequestSubject VARCHAR(200) NOT NULL,
  StudentRequestDetails VARCHAR(500) NOT NULL,
  StudentRequestStatus VARCHAR(20) NOT NULL,
  PRIMARY KEY(StudentRequestID),
  FOREIGN KEY(StudentEnrollmentNumber)
    REFERENCES Student(StudentEnrollmentNumber)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(StudentRequestTypeID)
    REFERENCES StudentRequestTypes(StudentRequestTypeID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE StudentResponses(
  StudentResponseID INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  StudentRequestID INTEGER UNSIGNED NOT NULL,
  FacultyID INTEGER UNSIGNED NOT NULL,
  StudentResponse VARCHAR(200) NOT NULL,
  IsApproved BOOL NULL,
  PRIMARY KEY(StudentResponseID),
  FOREIGN KEY(FacultyID)
    REFERENCES Faculty(FacultyID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(StudentRequestID)
    REFERENCES StudentRequests(StudentRequestID)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);
