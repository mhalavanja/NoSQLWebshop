<?php
require_once __SITE_PATH . '/service/UserService.php';

function getReviewsForProduct($sales)
{
    $reviews = [];
    foreach ($sales as $sale) {
        $review = [];
        $id = $sale->getBuyerId();
        $reviewer = UserService::getUserByProperty("_id", new MongoDB\BSON\ObjectId($id));
        $rating = $sale->getRating();
        $comment = $sale->getComment();

        if ($rating === null && $comment === null) continue;

        $review["username"] = $reviewer->getUsername();
        $review["rating"] = $rating;
        $review["comment"] = $comment;
        $reviews[] = $review;
    }
    return $reviews;
}

function getSaleIdForUserIfTheyCanReview($userId, $sales)
{
    foreach ($sales as $sale) {
        $id = $sale->getUserId();
        $rating = $sale->getRating();
        $comment = $sale->getComment();

        if ($id === $userId &&
            $rating === null && $comment === null) {
            return $sale->getId();
        }
    }
    return null;
}