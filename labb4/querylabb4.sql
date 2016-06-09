-- Table: labb4.namelist

-- DROP TABLE labb4.namelist;

CREATE TABLE labb4.namelist
(
  id serial NOT NULL,
  firstname text NOT NULL,
  lastname text NOT NULL,
  userid text NOT NULL,
  CONSTRAINT namelist_pkey PRIMARY KEY (id),
  CONSTRAINT unique_userid UNIQUE (userid),
  CONSTRAINT namelist_firstname_check CHECK (firstname <> ''::text),
  CONSTRAINT namelist_lastname_check CHECK (lastname <> ''::text),
  CONSTRAINT namelist_userid_check CHECK (userid <> ''::text)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE labb4.namelist
  OWNER TO casr1500;