<?php

namespace App\Enumerations;


enum ErrorCodes:int
{
    case UnrecognizedToken = -9;
    case UserIsNotAuthorizedToCommand = -8;
    case RecordNotFoundInDataStore = -7;
    case InvalidJson = -6;
    case NoHeaderWithGivenKey = -5;
    case ThereIsNoControllerForTheRequest = -4;
    case ContentWasNotConvertibleToRequiredType = -3;
    case NullValueIsNotAcceptable = -2;
    case UnknownError = -1;

    case UserNotFound =100;

}
