<?php 
namespace Marvel\Services\Request;

interface IRequest {
    function get();
    function ok(): bool;
}