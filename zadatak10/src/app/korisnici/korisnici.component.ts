import { Component, Directive } from '@angular/core';
import { Http, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/Rx';
import { Pipe, PipeTransform } from '@angular/core';

import { SearchPipe } from '../search.pipe';


@Component({
  selector: 'mh-korisnici',
  templateUrl: './korisnici.component.html'
})

export class KorisniciComponent {

//private korisnici = './app/korisnici/korisnici.json';
  data: Object[];

  name: String = "";

  constructor(private http: Http) {
    this.http.get("http://127.0.0.1/service/service.php").subscribe(
     // this.korisnici
        data => {
              this.data = JSON.parse(data["_body"]);

        },
        err => console.log(err.text()),
        () => {

        }
     );
}
}
