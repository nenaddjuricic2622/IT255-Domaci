import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { Pipe, PipeTransform } from '@angular/core';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header.component';
import { JumboComponent } from './jumbo/jumbo.component';
import { FormaComponent } from './forma/forma.component';
import { CarouselComponent } from './carousel/carousel.component';
import { PaginationComponent } from './pagination/pagination.component';
import { TabelaComponent } from './tabela/tabela.component';
import { HomeComponent } from './home/home.component';
import { NavComponent } from './nav/nav.component';
import { LoginComponent } from './login/login.component';
import { SignupComponent } from './signup/signup.component';
import { KorisniciComponent } from './korisnici/korisnici.component';
import { routing } from './app.routing';
import { SearchPipe } from './search.pipe';
import { SobaComponent } from './soba/soba.component';
import { SearchsobaPipe } from './searchsoba.pipe';
import { SearchsobakvadratPipe } from './searchsobakvadrat.pipe';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    JumboComponent,
    FormaComponent,
    CarouselComponent,
    PaginationComponent,
    TabelaComponent,
    HomeComponent,
    NavComponent,
    LoginComponent,
    SignupComponent,
    KorisniciComponent,
    SearchPipe,
    SobaComponent,
    SearchsobaPipe,
    SearchsobakvadratPipe
  ],
  imports: [
    routing,
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
