-- Create the Accident table if it doesn't exist
CREATE TABLE dbo.Accident (
    DateAc DATE,
    NAS CHAR(9),
    dommage NUMERIC(7, 2),
    villeAc VARCHAR(50),
    imma CHAR(6),
    PRIMARY KEY (DateAc, NAS, imma),
    FOREIGN KEY (NAS) REFERENCES dbo.Personne(NAS),
    FOREIGN KEY (imma) REFERENCES dbo.Voiture(Imma)
);
GO

-- Create the trigger on the Accident table
CREATE TRIGGER Afficher_Accident_Supprimee
ON dbo.Accident
AFTER DELETE
AS
BEGIN
    -- Select all columns from the deleted rows
    SELECT * FROM DELETED;
END;
GO

