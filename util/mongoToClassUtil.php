<?php
function mongoToClass($document, $obj)
{
//    echo '<pre>';
//    print_r($document);
//    echo '</pre>';
//    echo '<br>';
    foreach ($document as $key => $val) {
        $setProperty = "set" . ucfirst($key);

        if ($key === "_id") {
            $obj->setId($val["\$oid"]);
            continue;
        }
        elseif (strpos($key, "Id")){
            $obj->$setProperty($val["\$oid"]);
            continue;
        }

        if (!is_array($val)) {
            $obj->$setProperty($val);
        } elseif (strpos($key, "Array")) {
            $innerObjectArray = [];
            $innerClass = ucfirst(preg_replace("/Array/", "", $key));
            $innerObj = new $innerClass;
            foreach ($val as $inner) {
                $innerObjectArray[] = mongoToClass($inner, $innerObj);
            }
            $obj->$setProperty($innerObjectArray);
        }
        else {
            $innerClass = ucfirst($key);
            $innerObj = new $innerClass;
            $obj->$setProperty(mongoToClass($val, $innerObj));
        }

    }
    return $obj;
}
