<?php

namespace App\Constants;

enum FeatureStatusEnum:int {
    case OK = 1;
    case WARNING = 2;
    case ERROR = 3;
}
