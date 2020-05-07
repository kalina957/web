import { Component, OnInit } from '@angular/core';
import { Quote } from '../quote';
import { QuotesService } from '../quotes.service';

@Component({
  selector: 'app-quotes-api',
  templateUrl: './quotes-api.component.html',
  styleUrls: ['./quotes-api.component.css']
})
export class QuotesApiComponent implements OnInit {

  quotes: Quote[] = [];

  constructor(private quoteService: QuotesService) { }

  ngOnInit() {
    this.quoteService.getQuotes().subscribe(q => this.quotes = q);
  }

}
