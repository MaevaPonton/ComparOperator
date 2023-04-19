<?php


class Manager
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->setPdo ($pdo);
    }

    public function setPdo ($pdo)
    {
        $this -> pdo = $pdo;
    }




// FONCTIONS DE CREATION :

    
public function createReview(Review $review)
{
    $message = $review->getMessage();
    $author = $review->getAuthor();
    $voyage_id = $review->getVoyageId();

    // Vérification que l'auteur n'a pas déjà posté un message pour ce voyage
    $request = $this->pdo->prepare("SELECT COUNT(*) AS count FROM review WHERE author = :author AND voyage_id = :voyage_id");
    $request->bindParam(':author', $author);
    $request->bindParam(':voyage_id', $voyage_id);
    $request->execute();
    $data = $request->fetch(PDO::FETCH_ASSOC);

    if ($data['count'] > 0) {
        throw new Exception("Vous avez déjà posté un message pour ce voyage.");
    }

    // Insertion de la review dans la base de données
    $request = $this->pdo->prepare("INSERT INTO review (message, author, voyage_id) VALUES (:message, :author, :voyage_id)");
    $request->bindParam(':message', $message);
    $request->bindParam(':author', $author);
    $request->bindParam(':voyage_id', $voyage_id);
    $request->execute();
    $review->setId($this->pdo->lastInsertId());
}




    public function createDestination($location, $description, $photo)
    {
        $photo_path = '/images/' . basename($photo['name']);
        $photo_tmp_path = $photo['tmp_name'];
        
        if (move_uploaded_file($photo_tmp_path, $_SERVER['DOCUMENT_ROOT'] . $photo_path)) {
            $stmt = $this->pdo->prepare('INSERT INTO destination (location, description, photo) VALUES (:location, :description, :photo)');
            $stmt->execute([
                ':location' => $location,
                ':description' => $description,
                ':photo' => $photo_path
            ]);
            return true;
        } else {
            return false;
        }
    }

    public function createTourOperator($name, $link, $gradeCount, $gradeTotal, $isPremium, $logo)
    {
        $logo_path = '/images/' . basename($logo['name']);
        $logo_tmp_path = $logo['tmp_name'];
        
        if (move_uploaded_file($logo_tmp_path, $_SERVER['DOCUMENT_ROOT'] . $logo_path)) {
            $stmt = $this->pdo->prepare ('INSERT INTO tour_operator (name, link, grade_count, grade_total, is_premium, logo) VALUES (:name, :link, :grade_count, :grade_total, :is_premium, :logo)');
            $stmt->execute([
                ':name' => $name,
                ':link' => $link,
                ':grade_count' => $gradeCount,
                ':grade_total' => $gradeTotal,
                ':is_premium' => $isPremium,
                ':logo' => $logo_path
            ]);
            return true;
        } else {
            return false;
        }
    }




    public function createVoyage(Voyage $voyage)
    {
        $destinationId = $voyage->getDestinationId();
        $tourOperatorId = $voyage->getTourOperatorId();
        $price = $voyage->getPrice();
        
        $request = $this ->pdo->prepare("INSERT INTO voyages (destination_id, tour_operator_id, price) VALUES (:destination_id, :tour_operator_id, :price)");
        $request->bindParam(':destination_id', $destinationId);
        $request->bindParam(':tour_operator_id', $tourOperatorId);
        $request->bindParam(':price', $price);
        $request->execute();
        $voyage->setId($this->pdo->lastInsertId());
    }






// FONCTIONS D'AFFICHAGE D'ENSEMBLE:

    public function getAllDestination()
    {
        $request = $this->pdo->query('SELECT * FROM destination');
        $destinations = array();
        foreach ($request->fetchAll(PDO::FETCH_ASSOC) as $data) {
            $destination = new Destination ($data);
            $destination->setId($data['id']);
            $destinations[] = $destination;
        }
        
        return $destinations;
    }


    
    public function getAllOperator()
    {
        $request = $this->pdo->query('SELECT * FROM tour_operator');
        $tourOperator = array();
        foreach ($request->fetchAll(PDO::FETCH_ASSOC) as $data) {
            $tourOperator = new TourOperator ($data);
            $tourOperator->setId($data['id']);
            $tourOperators[] = $tourOperator;
        }
        
        return $tourOperators;
    }


    public function getAllReview()
    {
        $request = $this->pdo->query('SELECT * FROM review');
        $review = array();
        foreach ($request->fetchAll(PDO::FETCH_ASSOC) as $data) {
            $review = new Review ($data);
            $review->setId($data['id']);
            $reviews[] = $review;
        }
        
        return $reviews;
    }

    public function getAllVoyage()
    {
        $request = $this->pdo->query('SELECT * FROM voyages');
        $voyage = array();
        foreach ($request->fetchAll(PDO::FETCH_ASSOC) as $data) {
            $voyage = new Voyage ($data);
            $voyage->setId($data['id']);
            $voyages[] = $voyage;
        }
        
        return $voyages;
    }



// FONCTIONS D'AFFICHAGE PAR ID :

public function getDestinationById($destination_id)
    {
        $request = $this->pdo->prepare('SELECT * FROM destination WHERE id = :id');
        $request->bindValue(':id', $destination_id, PDO::PARAM_INT);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);

        if (!$resultat) {
            return null; 
        }

        $destination = new Destination([
            'id' => $resultat['id'],
            'location' => $resultat['location'],
            'description' => $resultat['description'],
            'photo' => $resultat['photo'],
        ]);
        return $destination;
    }


public function getTourOperatorById($tour_operator_id)
    {
        $request = $this->pdo->prepare('SELECT * FROM tour_operator WHERE id = :id');
        $request->bindValue(':id', $tour_operator_id, PDO::PARAM_INT);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);

        if (!$resultat) {
            return null; 
        }


        $tour_operator_id = new TourOperator([
            'id' => $resultat['id'],
            'name' => $resultat['name'],
            'link' => $resultat['link'],
            'grade_count' => $resultat['grade_count'],
            'grade_total' => $resultat['grade_total'],
            'is_premium' => $resultat['is_premium'],
            'logo' => $resultat['logo'],
        ]);
        
        return $tour_operator_id;
    }


    public function getVoyageById($voyage_id)
    {
        $request = $this->pdo->prepare('SELECT * FROM voyages WHERE id = :id');
        $request->bindValue(':id', $voyage_id, PDO::PARAM_INT);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);

        if (!$resultat) {
            return null; 
        }

        $voyage = new Voyage([
            'id' => $resultat['id'],
            'destination_id' => $resultat['destination_id'],
            'tour_operator_id' => $resultat['tour_operator_id'],
            'price' => $resultat['price'],
        ]);
        return $voyage;
    }




// FONCTIONS D'AFFICHAGE SPECIFIQUE :


    public function getOperatorByDestination($destination) {
        $request = $this->pdo->prepare('SELECT tour_operator.*
        FROM voyages
        JOIN tour_operator ON voyages.tour_operator_id = tour_operator.id
        JOIN destination ON voyages.destination_id = destination.id
        WHERE destination.location = :destination
        ');
        $request->bindParam(':destination', $destination);
        $request->execute();
        $operators = $request->fetchAll(PDO::FETCH_ASSOC);
        return $operators;
    }



    public function getReviewsByVoyageId($voyage_id)
    {
        $sql = 'SELECT * FROM review WHERE voyage_id = :voyage_id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':voyage_id', $voyage_id, PDO::PARAM_INT);
        $stmt->execute();
    
        $reviews = array();
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data = array(
                'id' => $row['id'],
                'message' => $row['message'],
                'author' => $row['author'],
                'voyage_id' => $row['voyage_id']
            );
            $review = new Review($data);
            $reviews[] = $review;
        }
       
        return $reviews;
    }


    public function getPhotosByDestination($destination_id)
    {
        $sql = 'SELECT * FROM photos WHERE destination_id = :destination_id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':destination_id', $destination_id, PDO::PARAM_INT);
        $stmt->execute();
    
        $photos = array();
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data = array(
                'id' => $row['id'],
                'photo1' => $row['photo1'],
                'photo2' => $row['photo2'],
                'photo3' => $row['photo3'],
                'photo4' => $row['photo4'],
                'destination_id' => $row['destination_id']
            );
            $photo = new Photos($data);
            $photos[] = $photo;
        }
       
        return $photos;
    }
    




    public function getReviewsByVoyageIdAndTourOperateurId($voyage_id, $tour_operator_id)
{
    $sql = 'SELECT review.* FROM review 
            JOIN voyage ON review.voyage_id = voyage.id 
            WHERE voyage.id = :voyage_id AND voyage.tour_operator_id = :tour_operator_id';
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':voyage_id', $voyage_id, PDO::PARAM_INT);
    $stmt->bindValue(':tour_operator_id', $tour_operator_id, PDO::PARAM_INT);
    $stmt->execute();

    $reviews = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data = array(
            'id' => $row['id'],
            'message' => $row['message'],
            'author' => $row['author'],
            'voyage_id' => $row['voyage_id']
        );
        $review = new Review($data);
        $reviews[] = $review;
    }

    return $reviews;
}




    public function getVoyageByDestinationAndOperator($destination_id, $operator_id) {
        $request = $this->pdo->prepare('SELECT * FROM voyages WHERE destination_id = :destination_id AND tour_operator_id = :operator_id');
        $request->bindParam(':destination_id', $destination_id, PDO::PARAM_INT);
        $request->bindParam(':operator_id', $operator_id, PDO::PARAM_INT);
        $request->execute();
        $voyages = [];
        while ($resultat = $request->fetch(PDO::FETCH_ASSOC)) {
            $voyages[] = new Voyage([
                'id' => $resultat['id'],
                'destination_id' => $resultat['destination_id'],
                'tour_operator_id' => $resultat['tour_operator_id'],
                'price' => $resultat['price']
            ]);
        }
        return $voyages;
    }

    public function getVoyagesByDestination($destination_id) {
        $request = $this->pdo->prepare('SELECT * FROM voyages WHERE destination_id = :destination_id');
        $request->bindParam(':destination_id', $destination_id, PDO::PARAM_INT);
        $request->execute();
        $voyages = [];
        while ($resultat = $request->fetch(PDO::FETCH_ASSOC)) {
            $voyages[] = new Voyage([
                'id' => $resultat['id'],
                'destination_id' => $resultat['destination_id'],
                'tour_operator_id' => $resultat['tour_operator_id'],
                'price' => $resultat['price']
            ]);
        }
        return $voyages;
    }
    
    


// FONCTIONS DE MODIFICATION :


public function updateOperatorToPremium($id)
{
    $request = $this->pdo->prepare("UPDATE tour_operator SET is_premium = 1 WHERE id = :id");
    $request->bindValue(':id', (int) $id, PDO::PARAM_INT);
    $request->execute();
}


public function updateOperatorToNotPremium($id)
{
    $request = $this->pdo->prepare("UPDATE tour_operator SET is_premium = 0 WHERE id = :id");
    $request->bindValue(':id', (int) $id, PDO::PARAM_INT);
    $request->execute();
}



}