<?php
function getStars($avgRating, $small)
{
        $prefix = "";
        if ($small) $prefix = "small-";
        $starSrc = __SITE_URL . "/static/images/" . $prefix . "star.png";
        $halfStarSrc = __SITE_URL . "/static/images/" . $prefix . "half-star.png";
        $stars = "";
        while ($avgRating > 0.5) {
            $stars .= "<img src='$starSrc'>";
            $avgRating--;
        }
        if ($avgRating === 0.5) $stars .= "<img src='$halfStarSrc'>";
        return $stars;
}