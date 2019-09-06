<?php

/**
 * @param array $data
 * @param int $count
 * @return \Illuminate\Http\JsonResponse
 */
function table($data = [], $count = 0)
{
    return response()->json([
        'code'  => 0,
        'msg'   => '获取成功',
        'count' => $count,
        'data'  => $data,
    ], 200);
}
