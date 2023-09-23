<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // use HasFactory;

    public static function allService()
    {
        $services = [
            [
                "title" => "Bankruptcy, Liquidation & Restructuring",
                "message" => "We offer comprehensive assistance in matters of bankruptcy, liquidation, and financial restructuring. Whether you're an individual struggling with debt or a business facing financial challenges, we are here to guide you through the process and find the best solutions for your unique situation. Our services are available to individuals and businesses alike."
            ],
            [
                "title" => "Civil Law",
                "message" => "Our civil law services cover a wide range of legal needs for individuals and businesses. No matter your legal concern, whether it's a contract dispute, a personal injury case, or family law matters, we provide expert guidance and representation. Our doors are open to everyone seeking resolution and justice."
            ],
            [
                "title" => "Criminal Law",
                "message" => "If you're facing criminal charges or need legal counsel in criminal matters, our team is here to defend your rights and provide sound legal advice. We are dedicated to ensuring that everyone, regardless of their situation, has access to a fair legal defense."
            ],
            [
                "title" => "Family Law",
                "message" => "Family law issues can be emotionally challenging. Our family law services are designed to help individuals and families navigate these sensitive matters. We are committed to providing support and legal solutions to all individuals seeking assistance."
            ],
            [
                "title" => "Intellectual Property",
                "message" => "Intellectual property is a valuable asset, and our team is here to protect and manage your creative work. Whether you're an artist, inventor, or business owner, our services are accessible to all who seek to safeguard their intellectual property."
            ],
            [
                "title" => "Administrative Law",
                "message" => "Navigating government regulations and administrative processes can be complex. We provide expert legal assistance to individuals and organizations dealing with administrative matters, ensuring everyone has a voice and access to justice."
            ],
            [
                "title" => "Employment Law",
                "message" => "Workplace issues can affect anyone. Our employment law services are available to individuals from all walks of life. We are dedicated to protecting the rights and dignity of workers."
            ],
            [
                "title" => "Arbitration",
                "message" => "Our arbitration and dispute resolution services are accessible to all individuals and businesses seeking efficient and fair conflict resolution. We believe that everyone should have access to alternative dispute resolution methods."
            ],
            [
                "title" => "Competition Law",
                "message" => "In the world of business, competition law matters to all. Our services encompass antitrust compliance and counseling, ensuring that fair competition benefits everyone."
            ],
            [
                "title" => "Human Rights",
                "message" => "Human rights are universal, and our legal services reflect that belief. We provide legal support and advocacy to protect the rights and freedoms of individuals, regardless of their background or circumstances."
            ],
            [
                "title" => "Constitutional Law",
                "message" => "Constitutional rights are the foundation of democracy. Our constitutional law services are available to individuals and organizations seeking to uphold and defend these rights, ensuring equal protection under the law for all."
            ],
            [
                "title" => "Tax Law",
                "message" => "Tax matters impact everyone, and our tax law services are accessible to individuals and businesses alike. We provide tax planning and resolution services to ensure financial stability and compliance."
            ],
            [
                "title" => "International Law",
                "message" => "In an interconnected world, international law matters to all. Our international law services cover a broad spectrum of global legal issues, advocating for the rights and interests of individuals and entities worldwide."
            ],
            [
                "title" => "Capital Market Law",
                "message" => "Capital markets play a crucial role in the global economy. Our capital market law services cater to businesses and investors alike, ensuring a fair and transparent financial landscape accessible to all."
            ],
        ];

        return $services;
    }
}
