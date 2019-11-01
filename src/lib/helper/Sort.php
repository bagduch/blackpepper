<?php

namespace bagduch\blackpepper\lib\helper;

trait Sort
{
    public function sortByAlpha($data, $step = 2)
    {
        if (is_int($step)) {
            $sortList = array();
            $lists = range('a', 'z', $step);
            foreach ($lists as $key => $list) {
                $startLabel = $list;
                for ($i = 0; $i < $step; $i++) {
                    if (ctype_alnum(chr(ord($list) + $i))) {
                        $firstletter = chr(ord($list) + $i);
                    } else {
                        $firstletter = chr(ord($list));
                    }
                    if (isset($data[$firstletter])) {
                        $sortList[$key]['data'] = $data[$firstletter];
                        unset($data[$firstletter]);
                    }
                    $endLabel = $firstletter;
                }
                $label = strtoupper($startLabel . " - " . $endLabel);
                if (isset($sortList[$key])) {
                    $sortList[$key]['label'] = $label;
                }
            }

            if (count($data) > 0) {
                foreach ($data as $item) {
                    $sortList['special']['data'] = $item;
                    $sortList['special']['label'] = "Others";
                }
            }

            return $sortList;
        }
    }
}