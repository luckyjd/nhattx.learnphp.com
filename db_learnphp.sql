CREATE TABLE IF NOT EXISTS learnphp_tinhvan.subject (
   id int UNSIGNED AUTO_INCREMENT NOT NULL,
   name varchar(50)  NOT NULL,
   description text  NOT NULL,
   CONSTRAINT subject_pk PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS learnphp_tinhvan.instructor (
   id int UNSIGNED AUTO_INCREMENT NOT NULL,
   name varchar(30)  NOT NULL,
   university varchar(30)  NOT NULL,
   url_img varchar(128)  NULL,
   description text  NOT NULL,
   CONSTRAINT instructor_pk PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS learnphp_tinhvan.course (
   id int UNSIGNED AUTO_INCREMENT NOT NULL,
   name varchar(50)  NOT NULL,
   description text  NOT NULL,
   subject_id int UNSIGNED NOT NULL,
   url_img varchar(1000)  NULL,
   length int  NOT NULL,
   effort int  NULL,
   price int  NULL,
   institution varchar(50)  NULL,
   level int  NULL,
   language varchar(30)  NOT NULL,
   video_transcripts varchar(30)  NULL,
   prerequisites text  NULL,
   CONSTRAINT course_pk PRIMARY KEY (id),
   FOREIGN KEY (subject_id) REFERENCES learnphp_tinhvan.subject(id)
);


CREATE TABLE IF NOT EXISTS learnphp_tinhvan.course_instructor (
   instructor_id int UNSIGNED NOT NULL,
   course_id int UNSIGNED NOT NULL,
   FOREIGN KEY (instructor_id) REFERENCES learnphp_tinhvan.instructor(id),
   FOREIGN KEY (course_id) REFERENCES learnphp_tinhvan.course(id)
);

