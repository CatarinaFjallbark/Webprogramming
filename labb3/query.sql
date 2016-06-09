-- Table: members

-- DROP TABLE members;

CREATE TABLE members
(
  prename character(20),
  surname character(25),
  email character varying(50) NOT NULL,
  pass character varying(20) NOT NULL,
  index SERIAL,
  CONSTRAINT pk_email PRIMARY KEY (email),
  CONSTRAINT check_pass CHECK (pass::text <> ''::text)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE members
  OWNER TO casr1500;
